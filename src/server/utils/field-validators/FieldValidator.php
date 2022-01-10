<?php declare(strict_types=1);

/** FieldValidator is an abstract class that provides the base functionality and
 * abstract methods its derivations are meant to implement. Each FieldValidator inheritance will validate its
 * data in a unique way.
*/
abstract class FieldValidator {

    public static function getDataOrErrorMessage(string $data, string $fieldName, FieldValidator $validator): string {
        try {
            $result = $validator->validate($data, $fieldName);
            return $result;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }

    /** FieldValidator simply sanitizes the data using htmlspecialchars and returns the escaped data */
    public function validate(string $data, string $fieldName = "field"): string {
        if ($data === null || $data === "")
            throw new Exception("The " . $fieldName . " is required.");
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>