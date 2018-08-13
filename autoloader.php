<?php


function internalAutoloader($class)
{
	$class = str_replace("\\", "/", $class);
	if (file_exists($class = __DIR__."/classes/".$class.".php")) {
		require $class;
	}
}

spl_autoload_register("internalAutoloader");
