<html>
 <head> 
<title>For Loop and Foreach Loop Execution</title>
 </head>
 <body> 
<?php 
function Car{ 
$cars=array("pulsar","Bajaj","tata" ,"platina"); foreach($cars as $ccars){
 echo " $cars\n"; 
} 
for ($i=0; $i<4;$i++){
 echo "\n$cars[$i]"; 
}
 }
Car();
 ?>
 </body>
 </html>