<?php 

$f = fopen(__DIR__ . "/Welcome.html", "rb");
fpassthru($f);