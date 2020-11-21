<?php
function abc($hhh){
    return $hhh * 2;
}
echo abc(3);
    echo "\n";
    
    
function f($a, $b){
    return ($a + $b);
 }
 echo f(2,5);
 
echo "\n";

function abcde($arr){ 
     $result = 0; 
     for ($i = 0; $i < count($arr); $i++) { 
         if($i == 0){ 
             $result += $arr[$i]; 
         }else{ 
             $result *= $arr[$i]; 
         } 
     } 
     return $result; 
 } 

 echo abcde(array(1, 3, 5 ,7, 9)); 
echo "\n";


function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
 echo max_array(array(5, 7, 9, 2, 4,));
 echo "\n";
 
$strip = "<h1>strip_tags</h1>" 
  . "<p>あいうえお</p>"; 
echo strip_tags($strip) ."\n"; 
 echo "\n";
 
 $abc = array(1, 2, 3);
 array_push($abc, 4, 5, 6);
 print_r($abc);
  echo "\n";
  
 $abc1 =[1, 2, 3];
 $abc2 = [10, 20, 30,];
 $abc3 = [100, 200, 300];
  $abc = array_merge($abc1,$abc2,$abc3);
  
  print_r($abc);
  
  echo "現在の時刻は:" .time();

    echo "\n";
    
    $time =mktime(2, 3, 5, 8, 5, 2020);
    echo $time;
   echo "\n";
   
   echo date('y/m/d');
    echo "\n";
   
   echo date('Y-m-d H:i:s');
    echo "\n";
   echo date("Y年m月d日 H時i分秒s");
    echo "\n";
 ?>