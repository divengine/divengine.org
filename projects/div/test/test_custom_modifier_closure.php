<?php

include "../src/div.php";

use divengine\div;

// div custom modifiers
div::addCustomModifier('bool:', function($value){
	return div::mixedBool($value) ? 'xxx' : 'false';
});

echo new div('{bool:var}', ["var" => true]);
