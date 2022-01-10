<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/CharacterLengthValidator.php");

class CharacterLengthValidatorTest extends TestCase {

    public function testValidate() {

        $validator1 = new CharacterLengthValidator(5, 30);
        $validator2 = new CharacterLengthValidator(100);
        $validator3 = new CharacterLengthValidator(4, -4);

        $data1 = "123";
        $data2 = "Hello there!";
        $data3 = "John Doe";
        $data4 = "Jane Smith";

        $result1 = FieldValidator::getDataOrErrorMessage($data1, "input", $validator1);
        $result2 = FieldValidator::getDataOrErrorMessage($data2, "input", $validator2);
        $result3 = FieldValidator::getDataOrErrorMessage($data3, "input", $validator3);
        $result4 = FieldValidator::getDataOrErrorMessage($data4, "input", $validator1);

        $this->assertEquals("The input must be between 5 and 30 characters long.", $result1);
        $this->assertEquals("The input must be exactly 100 characters long.", $result2);
        $this->assertEquals("The input must be between 4 and 4 characters long.", $result3);
        $this->assertEquals("Jane Smith", $result4);
    }
}

?>