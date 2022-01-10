<?php declare(strict_types=1);

require_once(__DIR__ . "/../FieldValidator.php");

/** FieldValidatorPipeline allows data to be piped through different field validators to ensure it is properly formatted. */
class FieldValidatorPipeline {

    private $validators;

    public function __construct(FieldValidator ...$validators) {
        $this->validators = $validators;
    }

    public function pipe(string $data, string $fieldName): string {
        $pipedData = $data;
        foreach ($this->validators as $validator) {
            $pipedData = $validator->validate($data, $fieldName);
        }
        return $pipedData;
    }
}

?>