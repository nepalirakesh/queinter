<?php
/*  Q1.remove empty element from an array



$array = [0=>'apple', 1=>'', 2=>'ball',3=>'',5=>'',4=>'cat'];
$new_array =array();
foreach($array as $key=>$value){
    if($value!=''){
        $new_array[$key]=$value;
    }
}
print_r($new_array);


Q2.Calculate factorial
$num = (int)readline("enter any number to calculate factorial");
$fac=1;
for($i=$num;$i>1;$i--){
    $fac=$fac*$i;
}
echo "factorial of given $num: $fac";



Q3. splitting string 
$string='string float';
$new_string =str_split($string);
$array=array();
$index=0;
foreach($new_string as $arr){
    if($arr!=' '){
        $array[$index]=$arr;
        $index++;

    }
}
print_r($array);*/

$range=(int)readline("enter a range to list all possible prime numbers:");
$prime_array=array();
$index=0;

for($i=2;$i<=$range;$i++){
    $flag=0;
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $flag=1;
            break;
        }
        
    }
    if($flag==0){
        $prime_array[$index]=$i;
        $index++;
    }
}
print_r($prime_array);

?>