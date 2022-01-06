<?php

namespace Hexlet\Php\Runner;


function run()
{
	$collection = collect(['taylor', 'abigail', null])->map(function($nam)) {
		return strtoupper($name);
	});
	return $collection;
	
}
