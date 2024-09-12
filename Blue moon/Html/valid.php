<?php

include ("function.php");
$ierr=$oerr=$aerr=$cerr="";
$chi=$cho=$ad=$ch=$chi2=$cho2=$ad2=$ch2=$image=$name=$size= $price=$rt= $add2= $cferr=
$chh2=$chii2=$choo2="";

$a=$b=$c=0;
if($_SERVER['REQUEST_METHOD']==="POST"){
    if(isset($_POST['check'])){
        //check in valdit
        if(empty($_POST['chi']) && empty($_POST['cho'])){
            $ierr="Check In is required";
            $oerr="Check Out is required";
        }
        else{
            $chi=in($_POST['chi']);
            $cho=in($_POST['cho']);
            if($chi>$cho){
                $ierr="Invalid date";
                $oerr="Check Out is less than Check in";
            
            }
            else{
                $a=1;
            }
            
        }
        if(empty($_POST['select-n-adult'])){
            $aerr="Please fill";
        }
        else{
            $ad=in($_POST['select-n-adult']);
            $b=1;

        }
        if(empty($_POST['select-childrens'])){
            $cerr="Please fill";
        }
        else{
            $ch=in($_POST['select-childrens']);
            $c=1;
        }
     
      
        if($a==0 || $b==0 || $c==0 ){

        }
        else{
          $sn="localhost";
          $un="root";
          $ps="";
          $db="guest";
          $conn=mysqli_connect($sn,$un,$ps,$db);
          $sql = "INSERT INTO checkin (Check_in, Check_out, Children, Adult) VALUES ('$chi', '$cho', '$ch', '$ad')";
          $r=mysqli_query($conn,$sql);
         
  }
}

}       
    


?>
<style>
    .content {
  background-color: transparent;
  display: flex;
  width:81.5%;
  margin: 435px 0 0 10%;
  background-image: var(--orasn);
}
.content .imgs {
  background-color: transparent;
  width: 120px;
  height: 240px;
  margin: 20px 0 40px 0;
}
.about {
  width: 40%;
  margin: 10px 0 0 40px;
  color: white;
}
.bed {
  font-size: 30px;
  margin-left: 70px;
}
.sleep {
  margin-top: 40px;
  font-size: 18px;
}
.num {
  margin-top: 15px;
  font-size: 18px;
}
.price {
  margin: 20px 0 0 140px;
  font-size: 25px;
}
.book {
  width: 40%;
  height: 40px;
  font-size: 17px;
  font-weight: bold;
  border: none;
  border-radius: 50px;
  margin-left: 60%;
  color: white;
  background-color: #9c8155;
}

.book:hover {
  position: relative;
  top: 20px;
  left: -50px;
  background-color: white;
  color: black;
  transform: scale(1.01);
  cursor: pointer;
}
</style>