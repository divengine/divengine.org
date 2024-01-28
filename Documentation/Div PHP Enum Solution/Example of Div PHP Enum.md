First, define your enums. You can build a taxonomy !!!:

**Enums.php**

```php
<?php

namespace MyEnums;

use divengine\enum;

class Temperature extends enum {/* Father of all types of temperatures */}
class ExtremeTemperature extends Temperature {/* Father of all types of extreme temperatures */}
class FIRE extends ExtremeTemperature {}
class ICE extends ExtremeTemperature {}

class NormalTemperature extends Temperature {/* Father of all types of normal temperatures */}
class HOT extends NormalTemperature {}
class COOL extends NormalTemperature {}
class COLD extends NormalTemperature {}
```

Second, use your enums:

```php
<?php

use MyEnums;


// Constants are good tricks, but optional
const COOL = COOL::class;

class AllTemperatures {
    const COOL = COOL::class; // maybe better
    const HOT = 'Enums\\HOT';  // ugly !!!

    //...
}

// Define some function with type hinting
function WhatShouldIdo(Temperature $temperature)
{
    switch (true) {
        case $temperature instanceof ExtremeTemperature:
            switch (true) {
                case $temperature instanceof FIRE:
                    return "Call the fire department";

                case $temperature instanceof ICE:
                    return "Warm up";
            }
            break;

        case $temperature instanceof NormalTemperature:
            switch ($temperature) {

                case HOT::class: // compare using classname
                    return "Drink a beer :D";

                case COOL or AllTemperatures::COOL: // compare using constants
                    return "Just go away !";

                case 'Enums\\COLD': // compare using string, ugly !!!
                    return "Wear a coat";
            }

            break;
    }

    return "I don't know";
}

// Call to function with a instance of any Temperature
echo WhatShouldIdo(new HOT()) . PHP_EOL;
```