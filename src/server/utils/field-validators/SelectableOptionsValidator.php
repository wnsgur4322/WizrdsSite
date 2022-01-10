<?php declare(strict_types=1);

require_once(__DIR__ . "/FieldValidator.php");

/** SelectableOptionsValidator ensures that only a valid option is selected from a list of available options */
class SelectableOptionsValidator extends FieldValidator {

    private $optionsSet;

    /**
     * @param optionsSet - An associative array of the options to check
     */
    public function __construct(array $optionsSet) {
        $this->optionsSet = $optionsSet;
    }

    public function validate(string $option, string $fieldName = "field"): string {
        try {
            $field = parent::validate($option, $fieldName);
            // will throw exception if the option does not exist in the options set
            $exists = $this->optionsSet[$option];
            return $field;
        } catch (Exception $err) {
            // if it's empty then specify a different message then if it isn't
            if (empty($field)) {
                throw new Exception("An option must be selected for the " . $fieldName . ".");
            } else {
                throw new Exception("The option \"" . $field . "\" is not a valid option for the " . $fieldName . ".");
            }
        }
    }
}

?>