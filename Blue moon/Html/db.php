<?php

if($_SERVER['REQUEST_METHOD']==="POST"){
  if(isset($_POST['check'])){
 if($a==0 || $b==0 || $c==0 ){

 }
 else{
        
         
         $ls="localhost";
         $un="root";
         $ps="";
         $db="guest";
         $conn=mysqli_connect($ls,$un,$ps,$db);
           
         if($ch2==2){
            $query="SELECT R_Price, ROOM_ID, R_Type, R_Size, R_Available, R_image, STAFF_ID
            FROM tbl_room
            GROUP BY R_Price having R_Type='FAMILY ROOM'";
            $r=mysqli_query($conn,$query);
              while($row= mysqli_fetch_assoc($r)){
                $image= '<img src="data:image;base64,'.base64_encode($row['R_image']).'"alt="image" style="width: 100%;
                height: 220px;">';
                $name=$row['R_Type'];
                $size=$row['R_Size'];
                $price=$row['R_Price'];
           
              
            }
         }
         else{
          
            $query="SELECT ROOM_ID,R_Price, ROOM_ID, R_Type, R_Size, R_Available, R_image, STAFF_ID
            FROM tbl_room
            GROUP BY R_Price ";
            $r=mysqli_query($conn,$query);
              while($row= mysqli_fetch_assoc($r)){
                $image= '<img src="data:image;base64,'.base64_encode($row['R_image']).'"alt="image" style="width: 50%;
                height: 320px;">';
                $id=$row['ROOM_ID'];
                $name=$row['R_Type'];
                $size=$row['R_Size'];
                $price=$row['R_Price'];
                
   echo "<div class='container'>
    <form action='Payment.php' method='POST' >
        <div class='content' style='margin-top:25px'>
            <div class='imgs'>
                $image
            </div>
            <div class='about' style='margin-left:-45%'>
                <h1 class='bed'> $name</h1>
                <h1 class='bed' style='visibility:hidden;'> $id</h1>
                <hr />
                <h3 class='sleep'>Room Size:<span style='background-color: transparent;'> $size</span> </h3>
                <h3 class='num'> $name</h3>
                <br /><br />
                <hr />
                <h3 class='price'>  $price $</h3>
                
                <input type='hidden' name='room_id[]' value='$id'>
                <input type='hidden' name='room_name[]' value='$name'>
                <input type='hidden' name='room_size[]' value='$size'>
                <input type='hidden' name='room_price[]' value='$price'>
                <button class='book' type='submit' style='position:relative;top:120px'>BOOK</button>
                <br><br>
            </div>
        </div>
    </form>
    </div>
"; 

            }
         }
           
        }
        
     
    

    
     
      

      }
    }
?>
