<?php


session_start();

$t0 = "test";
$t1 = "A+";
$t2 = "B+";
$t3 = "D";


GLOBAL $student;
$student = array($t0,$t1,$t2,$t3);





$final = isset($_POST['num']) ? $_POST['num'] : NULL;

$_SESSION['varname'] = $final;

if(isset($_POST['submit'])){
    header("Location: result.php");
   

   
}


?>