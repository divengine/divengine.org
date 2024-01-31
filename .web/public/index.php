<?php 

$f = fopen(__DIR__ . "/welcome.html", "rb");
fpassthru($f);