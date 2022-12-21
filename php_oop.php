<?php
/*1. Write a simple PHP class which displays the following string.
Class MyClass{
    public function __construct(){              
        echo "MyClass class has initialized";
    }
}

$new_MyClass = new MyClass();

2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.

Class Display{
    public $message = "Hello All, I am ";
    public function display_message($name){
       $message = $this->message;
        echo $message.$name;
    }

}

$child = new Display();
$child->display_message('Scott');
*/

/*Class calcFac{
    public $factorial=1;
    public function calc($num){
        $factorial = $this->factorial;

        for($i=$num;$i>0;$i--){
            $factorial = $factorial*$i;
            echo $factorial."/n";
        }
        
    }
}

$number= new calcFac();
$number->calc(5);*/
$time= getdate();
echo gettype($time);

