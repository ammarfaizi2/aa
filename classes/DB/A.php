<?php

namespace DB;

use Model;

class A extends Model
{

	public function aaa()
	{
		static $i = 1;
		return $this->link(B::class, "id", $i++);
	}

	public function get()
	{
		return new self;
	}
}
