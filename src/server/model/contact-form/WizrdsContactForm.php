<?php declare(strict_types=1);

require_once(__DIR__ . "/../../utils/form/IForm.php");
require_once(__DIR__ . "/../../utils/field-validators/pipeline/FieldValidatorPipeline.php");
require_once(__DIR__ . "/../../utils/field-validators/CharacterLengthValidator.php");
require_once(__DIR__ . "/../../utils/field-validators/AlphabetAndSpacesOnlyValidator.php");
require_once(__DIR__ . "/../../utils/field-validators/RegexValidator.php");
require_once(__DIR__ . "/../../utils/field-validators/EmailValidator.php");
require_once(__DIR__ . "/../../utils/field-validators/SelectableOptionsValidator.php");

$GLOBALS["productTypeValidatorPipeline"] = new FieldValidatorPipeline(
    new SelectableOptionsValidator(array("website development" => true, "app development" => true, "design" => true))
);

$GLOBALS["emailValidatorPipeline"] = new FieldValidatorPipeline(
    new CharacterLengthValidator(3, 320),
    new EmailValidator()
);

$GLOBALS["messageValidatorPipeline"] = new FieldValidatorPipeline(
    new CharacterLengthValidator(1, 2000)
);

$GLOBALS["nameValidatorPipeline"] = new FieldValidatorPipeline(
    new RegexValidator("/^([a-z]|[A-Z]|\s|'|-|\.)*$/", "The fieldName contains characters that are not allowed."),
    new CharacterLengthValidator(1, 100),
);

$GLOBALS["organizationValidatorPipeline"] = new FieldValidatorPipeline(
    new CharacterLengthValidator(1, 255)
);

class WizrdsContactForm implements IForm {

    private $organization;
    private $name;
    private $email;
    private $productType;
    private $message;

    public function __construct(
        string $organization,
        string $name,
        string $email,
        string $productType,
        string $message
    ) {
        global $organizationValidatorPipeline;
        global $nameValidatorPipeline;
        global $messageValidatorPipeline;
        global $emailValidatorPipeline;
        global $productTypeValidatorPipeline;

        $this->organization = $organizationValidatorPipeline->pipe($organization, "organization");
        $this->name = $nameValidatorPipeline->pipe($name, "name");
        $this->email = $emailValidatorPipeline->pipe($email, "email address");
        $this->productType = $productTypeValidatorPipeline->pipe($productType, "product type");
        $this->message = !$message ? "The message was left empty." : $messageValidatorPipeline->pipe($message, "message");
    }

    public function getFormData(): array {
        // return an associative array with each form element
        return array(
            "organization" => $this->organization,
            "name" => $this->name,
            "email" => $this->email,
            "productType" => $this->productType,
            "message" => $this->message
        );
    }
}

?>