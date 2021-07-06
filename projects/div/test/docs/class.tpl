@_DIALECT = div_php_dialect.json

/*{
    @name PHP class
    @description Generate a PHP Class
    @version 1.0
    @path php/class.tpl
    @update 5/9/2017
    @author Rafa Rodriguez rafageist
    @engine divGenerator.php
    @vars:
          optional string scope Default scope (public, private, protected) for methods and properties
          optional string type Default type (static or not) for a method
          required string name The name of the class
          optional string extends The comma-separated list of extended classes
          optional list(scope|name|default) properties List of properties
}*/

{camel:name}

{= v: 1.2345 =}
{= v2: '3.2345' =}

{#v:2,#}

{#v2:2,#}