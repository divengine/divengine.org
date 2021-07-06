<?php

include "../src/div.php";

use divengine\div;

div::setAllowedFunction('var_dump');

echo new div("test.tpl");
