<?php
$note="";

if($_SERVER['REQUEST_METHOD']==="POST"){
    if(isset($_POST['finds'])){
        if(empty($_POST['ell'])){
            $note="Email is required";
        }
    }
}
         if(empty($_POST['ell'])){
             $note="Email is required";
         }
         else{
            $em=$_POST['ell'];
            $sv="localhost";
            $na="root";
            $ps="";
            $db="guest";
            $conn=mysqli_connect($sv,$na,$ps,$db);
            $sql="SELECT * FROM tbl_guest where Guest_email='$em'"; 
            $r=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($r)){
                $eml=$row['Guest_email'];
            }
            if($em!=$eml){
                $note="Email is not found";
            }
            else{
            $em=$_POST['ell'];
            include("find.php");
            }
         }
     
     
?>
