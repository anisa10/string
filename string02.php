<?php 
$str = <<<EOD 
Example of string 
spanning multiple lines 
using heredoc syntax. 
EOD; 
 
/* More complex example, with variables. */ 
class foo {    
	var $foo; 
	var $bar; 
 
   function foo()    {       
    $this->foo = 'Foo';        
    $this->bar = array('Bar1', 'Bar2', 'Bar3');    } } 
 
$foo = new foo(); $name = 'Achmatim'; 
 
echo <<<EOT 
<u>$str</u><br> 
My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>. 
Now, I am printing some <b>{$foo->bar[1]}</b>. This should print a capital 'A': \x41 
EOT; 
?> 