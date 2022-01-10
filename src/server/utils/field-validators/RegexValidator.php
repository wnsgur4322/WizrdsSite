<?php declare(strict_types=1);

require_once(__DIR__ . "/FieldValidator.php");

class RegexValidator extends FieldValidator {

    private $regexPattern;
    private $errorMsg;

    // The first string is the regexPattern to check and the second is the error message if validation fails.
    // The word "fieldName" in the errorMsg is later replaced by the actual fieldName
    public function __construct(string $regexPattern, string $errorMsg = "The fieldName is invalid.") {
        $this->regexPattern = $regexPattern;
        $this->errorMsg = $errorMsg;
    }

    public function validate(string $data, string $fieldName = "field"): string {
        $sanitizedData = parent::validate($data, $fieldName);
        if (!preg_match($this->regexPattern, $data)) {
            $msg = str_replace("fieldName", $fieldName, $this->errorMsg);
            throw new Exception($msg);
        }
        return $sanitizedData;
    }
}

?>