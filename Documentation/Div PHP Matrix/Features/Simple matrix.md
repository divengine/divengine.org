## Create, get and set values

```php
<?php

include "matrix.php";

use divengine\matrix;

// simple list of nums
$nums = new matrix([
    ["", 1, 2, 3],
    ["", 4, 5, 6]
]);

// get item
echo $nums->get(1, 3); // 6

// set item
$nums->set(1, 3, 10);

echo $nums->formatTXT();
```
