<?php

define ('DIV_DEFAULT_TPL_FILE_EXT', 'div');

include "../src/div.php";

include __DIR__.'/nested/classes/extensions/Page.php';

include __DIR__.'/OtherPage.php';

echo new MyPages\Page();

echo new OtherPage();