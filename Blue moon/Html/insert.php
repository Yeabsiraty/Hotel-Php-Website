<?php

    $ls="localhost";
    $un="root";
    $ps="";
    $db="guest";
    $conn=mysqli_connect($ls,$un,$ps,$db);
    if($conn){
        $sucvv= "success";
    }
    $fn=in($_POST['fn']);
    $ln=in($_POST['ln']);
    $sex=in($_POST['sex']);
    $age=in($_POST['age']);
    $ph=in($_POST['ph']);
    $em=in($_POST['em']);
    $co=in($_POST['co']);
    $ct=in($_POST['ct']);
    $cn=in($_POST['cn']);
    $ct=in($_POST['ct']);
    $rn  =$_SESSION['name'];
    $sr="localhost";
    $us="root";
    $ps="";
    $db="guest";
    $conn=mysqli_connect($sr,$us,$ps,$db);
    $q="SELECT * from checkin";
    $r=mysqli_query($conn,$q);
    while($row=mysqli_fetch_assoc($r)){
        $chi=$row['Check_in'];
        $cho=$row['Check_out'];
    }
    $query="INSERT INTO tbl_guest (G_F_Name, G_Last_Name, G_Age, G_Sex, G_Country, G_City) VALUES ('$fn','$ln','$age','$sex','$co','$ct')";
    
    $r=mysqli_query($conn,$query);
    if($conn){
        echo "connected";
    }
    $cid = mysqli_insert_id($conn);
    $quer = "SELECT * FROM tbl_room_booking";
    $rer = mysqli_query($conn, $quer);

    $bookedRooms = array();
    while ($row = mysqli_fetch_assoc($rer)) {
    $bookedRooms[] = $row['ROOM_ID']; 
    }

    if (in_array( $rno, $bookedRooms)) {
        $notinserted="Opps! Room is not available <br><span style='font-size=14px;color:red'>Try to book other available room</span>";
    } else {
        $query2="INSERT INTO tbl_room_booking (ROOM_ID, GUEST_ID,  Check_In,Check_Out) values('$rn','$cid','$chi','$cho')";
    $r2=mysqli_query($conn,$query2);
    if($r2){
    $inserted="Successfully Booked";
    }
    }


?>