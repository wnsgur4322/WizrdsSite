<?php declare(strict_types=1);

require_once(__DIR__ . "/FieldValidator.php");

/** reduce some of our code */
use \AlphabetAndSpacesOnlyValidator as ASV;

/** AlphabetAndSpacesOnlyValidator checks to see if the data passed to it only contains letters or spaces.
 * If it does not, an error is thrown in validate()
 */
class AlphabetAndSpacesOnlyValidator extends FieldValidator {

    /** constants for checking the ascii code of each character in validate() */
    private static $SMALLEST_LOWERCASE_ASCII = 97;
    private static $LARGEST_LOWERCASE_ASCII = 122;
    private static $SMALLEST_UPPERCASE_ASCII = 65;
    private static $LARGEST_UPPERCASE_ASCII = 90;
    private static $SPACE_ASCII = 32;

    public function __construct() {

    }
    /** @return bool true if character is letter or space else false */
    public function isLetterOrSpace(string $character): bool {
        $code = ord($character);
        return ($code >= ASV::$SMALLEST_LOWERCASE_ASCII && $code <= ASV::$LARGEST_LOWERCASE_ASCII)
        || ($code >= ASV::$SMALLEST_UPPERCASE_ASCII && $code <= ASV::$LARGEST_UPPERCASE_ASCII)
        || $code === ASV::$SPACE_ASCII;
    }

    public function validate(string $data, string $fieldName = "field"): string {
        $sanitizedData = str_split(parent::validate($data, $fieldName));
        foreach ($sanitizedData as $character) {
            if (!($this->isLetterOrSpace($character))) {
                throw new Exception("The " . $fieldName . " must only contain letters or spaces.");
            }
        }
        return join($sanitizedData);
    }
}

?>