<?php


class Form {

    private $entries;

    public function __construct($entries = []) {
        $this->entries = $entries;
    }

    private function getValue($index) {
        return isset($this->entries[$index]) ? $this->entries[$index] : null;
    }

    public function create($action = "", $method = "POST") {
        echo "<form action='" . $action . "' " . "method='" . $method . "'>";
    }

    public function end() {
        echo "</form>";
    }

    public function text($name) {
        echo "<label for='" . $name . "'>" . ucfirst($name) . "</label>";
        echo "<input type='text' name='" . $name . "' value='" . $this->getValue($name) . "'>";
    }

    public function textarea($name, $cols = 30, $rows = 100) {
        echo "<textarea name='" . $name . "' cols='" . $cols . "' rows='" . $rows . "'><textarea>";
    }

    public function radio($name, $values = []) {
        foreach ($values as $value) {
            echo "<div class='inline-cont'>";
            echo "<input type='radio' name='" . $name ."' value='" . $value . "'>";
            echo "<label for='" . $name . "'>" . ucfirst($value) . "</label>";
            echo "</div>";
        }
    }

    public function checkbox($name) {
        echo "<input type='checkbox' name='" . $name . "'>";
        echo "<label for='" . $name . "'>" . ucfirst($name) . "</label>";

    }

    public function select($name, $options = []) {
        $select = ["<select name='" . $name . "'>"];
        foreach ($options as $option) {
            array_push($select, "<option value='" . $option . "'>" . ucfirst($option) . "</option>");
        }
        array_push($select, "</select>");

        foreach ($select as $row) {
            echo $row;
        }
    }

    public function submit($value) {
        echo "<input type='submit' value='" . ucfirst($value) . "'>";
    }
}
?>