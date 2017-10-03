<?php
session_start();
function message() {
    if (isset($_SESSION["message"])) {
        $output = htmlentities($_SESSION["message"]);
        // Clear message after use.
        $_SESSION["message"] = null;
        return $output;
    }
}
