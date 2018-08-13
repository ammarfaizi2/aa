<?php

abstract class Model implements IteratorAggregate
{
	public function __construct()
	{
		$this->me = $this;
	}

	public function getIterator()
	{
		return new ArrayIterator([
			/**
			 * Looping 5 kali
			 */
			$this->me,
			$this->me,
			$this->me,
			$this->me,
			$this->me
		]);
	}

	public function __get($method)
	{
		return $this->{$method}();
	}

	public function link($class, $par, $val)
	{
		return new $class($par, $val);
	}
}
