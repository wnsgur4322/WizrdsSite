<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/AlphabetAndSpacesOnlyValidator.php");

class AlphabetAndSpacesOnlyValidatorTest extends TestCase {

    public function testIsLetterOrSpace() {
        $validator = new AlphabetAndSpacesOnlyValidator();

        $char1 = '4';
        $char2 = 'F';
        $char3 = 'z';
        $char4 = '[';
        $char5 = ' ';

        $this->assertEquals(false, $validator->isLetterOrSpace($char1));
        $this->assertEquals(true, $validator->isLetterOrSpace($char2));
        $this->assertEquals(true, $validator->isLetterOrSpace($char3));
        $this->assertEquals(false, $validator->isLetterOrSpace($char4));
        $this->assertEquals(true, $validator->isLetterOrSpace($char5));
    }

    public function testValidate() {
        $validator = new AlphabetAndSpacesOnlyValidator();

        $args1 = array("Caleb Bender", "name");
        $result1 = $validator->validate($args1[0], $args1[1]);
        $args2 = array("12345", "first name");
        $result2 = FieldValidator::getDataOrErrorMessage($args2[0], $args2[1], $validator);
        $args3 = array("!Finally?", "name");
        $result3 = FieldValidator::getDataOrErrorMessage($args3[0], $args3[1], $validator);

        $this->assertEquals("Caleb Bender", $result1);
        $this->assertEquals("The first name must only contain letters or spaces.", $result2);
        $this->assertEquals("The name must only contain letters or spaces.", $result3);
    }
}

?>