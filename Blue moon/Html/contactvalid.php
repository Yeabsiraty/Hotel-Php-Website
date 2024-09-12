<?php
$fnerr=$lnerr=$emerr=$pherr=$fnerr=$suberr=$txterr=$cons="";
    $a=0;
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
                $ln=$_POST['ln'];
                $a=1;
            }

            if(empty($_POST['em'])){
                $emerr="Email is required";
            }
            else{
                $em=$_POST['em'];
                $a=1;
            }

            
            if(empty($_POST['ph'])){
                $pherr="Phone is required";
            }
            else{
                $ph=$_POST['ph'];
                $a=1;
            }

            if(empty($_POST['sub'])){
                $suberr="Subject is required";
            }
            else{
                $sub=$_POST['sub'];
                $a=1;
            }

            if(empty($_POST['txt'])){
                $txterr="Message is required";
            }
            else{
                $txt=$_POST['txt'];
                $a=1;
            }
            if($a==0){
            }
            else{
                $sn="localhost";
                $na="root";
                $ps="";
                $db="guest";
                $conn=mysqli_connect($sn,$na,$ps,$db);
                $sql="INSERT INTO contact (First_name,Last_name,Email,Phone,Subjects,Messages)values('$fn','$ln','$em','$ph','$sub','$txt')";
                $r=mysqli_query($conn,$sql);
                if($r){
                    $cons="Successfully";
                }
            }
        }
    }

?>
