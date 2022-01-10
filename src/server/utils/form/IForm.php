<?php declare(strict_types=1);

interface IForm {
    /** @return an associative array where the keys are the field names and the values are the field values */
    public function getFormData(): array;
}

?>