<?php declare(strict_types=1);

require_once(__DIR__ . "/FieldValidator.php");

/** EmailValidator checks to see if an email is valid; that is, it conforms to the naming syntax requirements that are
 * universally expected by email services.
 */
class EmailValidator extends FieldValidator {

    public function __construct() {

    }

    public function validate(string $email, string $fieldName = "email address"): string {
        $sanitizedEmail = parent::validate($email, $fieldName);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("The " . $fieldName . " is invalid.");
        }
        return $sanitizedEmail;
    }
}

?>