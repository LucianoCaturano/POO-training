<?php

class Html {

    public function css($url = "style.css") {
        echo "<link rel='stylesheet' href='assets/css/" . $url . "'>";
    }

    public function meta($name = "", $content ="") {
        echo "<meta name='" . $name . "' content ='" . $content . "'>";
    }

    public function img($src = "", $alt = "") {
        echo "<img src=assets/img/'" . $src . "' alt='" . $alt . "'>";
    }

    public function a($url = "#", $content) {
        echo "<a href='" . $url . "'>" . $content . "</a>";
    }

    public function script($src = 'script.js') {
        echo "<script src='assets/js/" . $src . "'></script>";
    }
}


?>