<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/RegexValidator.php");

class RegexValidatorTest extends TestCase {

    public function testValidate() {
        $validator = new RegexValidator("/^([a-z]|[A-Z]|\s|'|-|\.)*$/", "The fieldName contains characters that are not allowed.");
        $test1 = "J. K. Rowling";
        $test2 = "Som3thing invalid";
        $test3 = "Jane Johnson-Adams";
        $test4 = "Martha O'Callahan";
        $test5 = "This n@me is wrong";

        $result1 = FieldValidator::getDataOrErrorMessage($test1, "name", $validator);
        $result2 = FieldValidator::getDataOrErrorMessage($test2, "name", $validator);
        $result3 = FieldValidator::getDataOrErrorMessage($test3, "name", $validator);
        $result4 = FieldValidator::getDataOrErrorMessage($test4, "name", $validator);
        $result5 = FieldValidator::getDataOrErrorMessage($test5, "name", $validator);

        $this->assertEquals("J. K. Rowling", $result1);
        $this->assertEquals("The name contains characters that are not allowed.", $result2);
        $this->assertEquals("Jane Johnson-Adams", $result3);
        $this->assertEquals("Martha O'Callahan", $result4);
        $this->assertEquals("The name contains characters that are not allowed.", $result5);
    }
}
?>