<?php
$_SESSION['name'];
include('function.php');
$fnerr=$lnerr=$agerr=$sxerr=$emerr=$pherr=$coerr=$cterr=$cnerr=$cperr= $cnerr=$inserted=$notinserted="";
$fn=$ln=$ph=$em=$co=$ct=$cn=$cp="";
$a=$b=$c=$d=$e=$f=$g=$h=$i= $j="0";
if($_SERVER['REQUEST_METHOD']==="POST"){
    if(isset($_POST['submit'])){
        if(empty($_POST['fn'])){
            $fnerr="Name is required";
        }
        else{
            $fn=$_POST['fn'];
            $a=1;
        }
        if(empty($_POST['ln'])){
            $lnerr="Name is required";
        }
        else{
            $fn=$_POST['ln'];
            $b=1;
        }
        if(empty($_POST['age'])){
            $agerr="age is required";
        }
        else{
            $fn=$_POST['age'];
            $c=1;
        }
        if(empty($_POST['sex'])){
            $sxerr="sex is required";
        }
        else{
            $fn=$_POST['sex'];
            $d=1;
        }
        if(empty($_POST['ph'])){
            $pherr="phone is required";
        }
        else{
            $fn=$_POST['ph'];
            $e=1;
        }
        if(empty($_POST['em'])){
            $emerr="email is required";
        }
        else{
            $fn=$_POST['em'];
            $f=1;
        }
        if(empty($_POST['ct'])){
            $cterr="City is required";
        }
        else{
            $fn=$_POST['ct'];
            $g=1;
        }
        if(empty($_POST['co'])){
            $coerr="country is required";
        }
        else{
            $fn=$_POST['co'];
            $h=1;
        }
        if(empty($_POST['cn'])){
            $cnerr="card number is required";
        }
        else{
            $fn=$_POST['cn'];
            $i=1;
        }
        if(empty($_POST['cp'])){
            $cperr="password is required";
        }
        else{
            $fn=$_POST['cp'];
            $j=1;
        }
        if($a==0||$b==0||$c==0||$d==0||$e==0||$f==0||$g==0||$h==0||$i==0||$j==0){

        }
        else{
            $rno=$_SESSION['name'];;
            include("insert.php");
        }
    }
    
}



?>