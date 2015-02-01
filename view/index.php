<?
require_once("model/config.class.php");
$action = explode('/', $_SERVER['REQUEST_URI']);
$action = $action[2];

$action = $action!=null?$action:"index";
switch ($action) {
    default: include("view/".$action.".php");
}
?>