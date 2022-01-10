<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/FieldValidator.php");

class DerivedFieldValidator extends FieldValidator {
    public function __construct() {

    }
}
/** FieldValidatorTest tests to see that the input is escaped properly. */
class FieldValidatorTest extends TestCase {

    public function testValidate() {
        $fieldValidator = new DerivedFieldValidator();

        $data1 = "<script>alert(\"Hacked\")</script>";
        $data2 = "'Hello World!\" & true";
        
        $result1 = $fieldValidator->validate($data1);
        $result2 = $fieldValidator->validate($data2);
        
        $data3 = "";
        $result3 = FieldValidator::getDataOrErrorMessage($data3, "field", $fieldValidator);

        $this->assertEquals("&lt;script&gt;alert(&quot;Hacked&quot;)&lt;/script&gt;", $result1);
        $this->assertEquals("'Hello World!&quot; &amp; true", $result2);
        $this->assertEquals("The field is required.", $result3);

    }
}

?>