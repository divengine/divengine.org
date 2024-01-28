Library for JavaScript and PHP, that allow mapping the PHP functions, static methods of classes and arbitrary data. This class provides a simpler solution to return registered data without having to register a specific function.

Mapping PHP data, functions and methods in JavaScript

An open source library for JavaScript and PHP, that allow mapping the PHP functions, static methods of classes and arbitrary data when instance a JavaScript class.

With this class you can call a functions and methods via AJAX.

For example:

Server side:

server.php

```php
<?php

use divengine\ajaxmap;

function sum($x, $y){
  return $x + $y; 
}

class Enterprise{
  public static function getEmployees(){
      return [
        ["name" => "Thomas Hardy", "salary" => 1500],  
        ["name" => "Christina Berglund", "salary" => 1200] 
      ];  
    } 
}

// Server instance ...

$server = new ajaxmap(); 

// ... Add methods ...

$server->addMethod("sum"); 
$server->addClass("Enterprise); 

// ... and go!
$server->go(); 
```

Client side:

index.html

```html
<script type = "text/javascript" src="ajaxmap.js"></script>
<script type = "text/javascript">
    var map = new ajaxmap("server.php");
    var sum = map.sum(20, 10);
    var employees = map.Enterprise.getEmployees();
    var firstEmployeeName = employees[0]['name'];
</script>
```