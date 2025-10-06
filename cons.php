<?php
class Example{
var $message;
public function_construct($msg)
{
$this->message=$msg;
echo"Construct called:Object created with message-$this->message<br>";
}
public function displaymessage()
{
echo"message:$this->message<br>";
}
public function_destruct()
{
echo"Destructor called:cleaning up resources.<br>";
}
}
$obj=new Example("Hello,PHP!");
$obj->displaymessage();
?>
