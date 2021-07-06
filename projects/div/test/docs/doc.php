<?php

include "../../div.php";
//div::logOn();
div::docsOn();

$temp_div = new div("class.tpl", []);
$temp_div->loadTemplateProperties();
$temp_div->prepareDialect();
div::docsReset();
div::docsOn();
$temp_div->parseComments("main");
$docProps = $temp_div->getDocs();

var_dump($docProps);

