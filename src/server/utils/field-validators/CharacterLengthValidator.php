<?php

require_once(__DIR__ . "/FieldValidator.php");

/** CharacterLengthValidator allows the API to specify a minimum and maximum number of characters for data
 * or an exact number of characters.
 */
class CharacterLengthValidator extends FieldValidator {

    private $minChars;
    private $maxChars;

    /** @param minChars - the minimum number of characters the data must be (or the exact number of characters if maxChars is not set)
     * @param minChars - the maxmimum number of characters the data must be (leave 0 if you want minChars to be the exact character length)
    */
    public function __construct(int $minChars, int $maxChars = 0) {
        $this->minChars = ($minChars < 1) ? 1 : $minChars;
        $this->maxChars = ($maxChars < $minChars && $maxChars !== 0) ? $minChars : $maxChars;
    }

    public function validate(string $data, string $fieldName = "field"): string {
        $sanitizedData = parent::validate($data, $fieldName);
        if ($this->maxChars === 0) {
            if (strlen($data) !== $this->minChars)
                throw new Exception("The " . $fieldName . " must be exactly " . strval($this->minChars) . " characters long.");
        } else {
            if (strlen($data) < $this->minChars || strlen($data) > $this->maxChars)
                throw new Exception("The " . $fieldName . " must be between " . strval($this->minChars) . " and " . strval($this->maxChars) . " characters long.");
        }
        return $sanitizedData;
    }
}

?>