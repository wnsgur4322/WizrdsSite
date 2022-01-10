<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/SelectableOptionsValidator.php");

class SelectableOptionsValidatorTest extends TestCase {

    public function testValidate() {
        $optionsValidator = new SelectableOptionsValidator(array("option1" => true, "option2" => true, "option3" => true));

        $data1 = "option1";
        $data2 = "does not exist";
        $data3 = "option3";
        $data4 = "optionz";
        $data5 = "option2";

        $result1 = FieldValidator::getDataOrErrorMessage($data1, "field", $optionsValidator);
        $result2 = FieldValidator::getDataOrErrorMessage($data2, "field", $optionsValidator);
        $result3 = FieldValidator::getDataOrErrorMessage($data3, "field", $optionsValidator);
        $result4 = FieldValidator::getDataOrErrorMessage($data4, "field", $optionsValidator);
        $result5 = FieldValidator::getDataOrErrorMessage($data5, "field", $optionsValidator);

        $this->assertEquals("option1", $result1);
        $this->assertEquals("The option \"does not exist\" is not a valid option for the field.", $result2);
        $this->assertEquals("option3", $result3);
        $this->assertEquals("The option \"optionz\" is not a valid option for the field.", $result4);
        $this->assertEquals("option2", $result5);

    }
}

?>