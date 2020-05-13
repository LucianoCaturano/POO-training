<?php

class Validator {

    public function string($input) {
        $input = sanitize($input, FILTER_SANITIZE_STRING);
        return $input;
    }

    public function int($input) {
        $input = sanitize($input, FILTER_SANITIZE_INT);
        return $input;
    }

    public function float($input) {
        $input = sanitize($input, FILTER_SANITIZE_FLOAT);
        return $input;
    }

    public function mail($input) {
        $input = sanitize($input, FILTER_SANITIZE_EMAIL);
        return $input;
    }

}
?>
