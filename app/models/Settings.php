<?php


class Settings extends Eloquent
{


	public static function getCurrentUrl($name){
		$path = $_SERVER['REQUEST_URI'];
		return (strpos($path, $name)!==false)?'current':'';
		}
}