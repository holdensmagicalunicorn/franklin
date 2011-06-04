<?php

namespace Franklin\test\config\type;

class String extends Mixed
{
	public function validate($value)
	{
		return preg_match('@^[\w\d]+$@', $value);
	}
}