<?php
/*Q1, define a function that returns an array whose elements are the root
of quadratic equation ax2+bx+c=0. 
root= -b+-sqrt(b2-4ac)/(2a). equation should have at least one root, if there is just one root ,arrays both element but be the same root



function findRoots($a,$b,$c){
    $root1 = (-$b+sqrt($b*$b-4*$a*$c))/(2*$a);
    $root2 = (-$b-sqrt($b*$b-4*$a*$c))/(2*$a);
    if(!isset($root1)){
        $roots_array=array($root2,$root2);
    }
    elseif(!isset($root2)){
        $roots_array=array($root1,$root1);
    }
    else{
        print_r($roots_array=array($root1,$root2));

    }
}
findRoots(1,-2,1);
function findRoots($a, $b, $c)
{
    $delta = ($b * $b) - 4 * ($a * $c);
    $x = (- $b - sqrt($delta)) / (2 * $a);
    $y = (- $b + sqrt($delta)) / (2 * $a);
    return [$x, $y];
}

print_r(findRoots(2, 10, 8));*/
function print_array($first,$second){
    $unique_array=$first;
    
    $count= count($first);
    for($i=0;$i<count($second);$i++){
        $duplicate = 0;
        for($j=0;$j<count($first);$j++){
            if($second[$i]==$first[$j]){
                $duplicate=1;
                break;
            }
            

        }
        if(!$duplicate){
            $unique_array[$count]=$second[$i];
            $count++;
        }
    }
    print_r($unique_array);
    }
    

$name_list_A = ['Sarala','Ava', 'Swopnil','Emma', 'Olivia','france'];
$name_list_B = ['Olivia', 'Sophia', 'Emma','Sarala','germany'];
print_array($name_list_A,$name_list_B);

?>







