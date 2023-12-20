<?php
require_once("class/function.php");
require_once("templates/header.php");

$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : '';

switch ($mod) {
    case "about":
        require("about.php");
    break;
    case "form_input":
        require("form_input.php");
    break;
    case "update":
        require("update.php");
    break;
    case "index":
        require("index.php");
    break;
}

require_once("templates/footer.php");