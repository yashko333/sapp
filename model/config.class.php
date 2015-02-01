<?
class Config {
	static $version = array(0,0,1);
	static $title = "Sample App";
	static function footer()
	{
		return self::$title . " v." . implode(".", Config::$version);
	}
}
?>