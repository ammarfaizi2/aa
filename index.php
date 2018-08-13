<?php

require __DIR__."/autoloader.php";

use DB\A;

$a = A::get();
foreach ($a as $v) {
	echo $v->aaa->id."\n";
}
