<?php
putenv("DB_HOST= localhost");
putenv("DB_USER=root");

$host = getenv("DB_HOST");
$user = getenv("DB_USER");

$foo = 'Foo global';

function test(){
    $foo = 'Foo local';
    echo'global variable:' .$GLOBALS['foo'].'<br>';
    echo'local variable:'. $foo;
}
$foo = 'hello world';
test();

?>