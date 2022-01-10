<?php declare(strict_mode=1);

use PHPUnit\Framework\TestCase;

require_once("utils/field-validators/pipeline/FieldValidatorPipeline.php");

// field validator derivations
require_once("utils/field-validators/CharacterLengthValidator.php");
require_once("utils/field-validators/EmailValidator.php");
require_once("utils/field-validators/AlphabetAndSpacesOnlyValidator.php");

class FieldValidatorPipelineTest extends TestCase {

    public function getPipedDataOrErrorMessage(string $data, FieldValidatorPipeline $pipeline) {
        try {
            $result = $pipeline->pipe($data, "input");
            return $result;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }

    public function testPipe() {
        $pipeline1 = new FieldValidatorPipeline(
            new AlphabetAndSpacesOnlyValidator(),
            new CharacterLengthValidator(200, 1000)
        );

        $pipeline2 = new FieldValidatorPipeline(
            new CharacterLengthValidator(14),
            new EmailValidator()
        );

        $result1 = $this->getPipedDataOrErrorMessage("1 2 3 4 5", $pipeline1);
        $result2 = $this->getPipedDataOrErrorMessage("Some name", $pipeline1);

        $result3 = $this->getPipedDataOrErrorMessage("not 14 chars", $pipeline2);
        $result4 = $this->getPipedDataOrErrorMessage("12345678901234", $pipeline2);

        $this->assertEquals("The input contains characters that are not allowed.", $result1);
        $this->assertEquals("The input must be between 200 and 1000 characters long.", $result2);
        $this->assertEquals("The input must be exactly 14 characters long.", $result3);
        $this->assertEquals("The input is invalid.", $result4);
    }
}

?>