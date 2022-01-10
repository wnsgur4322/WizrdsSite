<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/EmailValidator.php");

class EmailValidatorTest extends TestCase {

    public function testValidate() {

        $validator = new EmailValidator();

        $email1 = "someAddress@gmail.com";
        $email2 = "hello";
        $email3 = "s@r";
        $email4 = "my.test.email@yahoo.com";
        $email5 = "%bad>email@somewhere.net";

        $errorMessage = "The email address is invalid.";

        $this->assertEquals($email1, FieldValidator::getDataOrErrorMessage($email1, "email address", $validator));
        $this->assertEquals($errorMessage, FieldValidator::getDataOrErrorMessage($email2, "email address", $validator));
        $this->assertEquals($errorMessage, FieldValidator::getDataOrErrorMessage($email3, "email address", $validator));
        $this->assertEquals($email4, FieldValidator::getDataOrErrorMessage($email4, "email address", $validator));
        $this->assertEquals($errorMessage, FieldValidator::getDataOrErrorMessage($email5, "email address", $validator));

    }
}

?>