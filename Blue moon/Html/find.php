<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Css/find.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>
  </head>
  <?php
   $not=$fname=$lname=$checkin=$checkout=$rid="";
   if($_SERVER['REQUEST_METHOD']==="POST"){
      
           $em=$_POST['ell'];
           $sv="localhost";
           $na="root";
           $ps="";
           $db="guest";
           $conn=mysqli_connect($sv,$na,$ps,$db);
           $sql="SELECT * FROM tbl_guest where Guest_email='$em'"; 
           $r=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_assoc($r)){
               $id=$row['GUEST_ID'];
               $fname=$row['G_F_Name'];
               $lname=$row['G_Last_Name'];
           }
           $sql2="SELECT * FROM tbl_room_booking where GUEST_ID=$id";
           $resul=mysqli_query($conn,$sql2);
          while($ro=mysqli_fetch_assoc($resul)){
                   $checkin=$ro['Check_In'];
                   $checkout=$ro['Check_Out'];
                   $rid=$ro['ROOM_ID'];
               }
           
       
   }
  ?>
  <body>
    <style>
      span{
        background-color: transparent;
        color: white;
        text-decoration: none;
      }
    </style>
  <div class="content lash">
    <div class="customer">
      <h1>Customer Information</h1>
      <h2>First Name:<span><?php echo $fname?></span></h2>
      <h2>Last Name: <span><?php echo $lname?></span></h2>
      <h2>Check In: <span><?php echo $checkin?></span></h2>
      <h2>Check Out: <span><?php echo $checkout?></span></h2>
    </div>
    <br>
    <br><hr>
    <div class="book">
      <h1>Booked Room</h1>
      <h2>Room: <span><?php echo $rid?></span></h2>
      <br><br><br>
    </div>
  </div>

  </body>
  <?php
  include('footer.php')
  ?>
    
  </body>
  <script>
    var dark = document.getElementById("dark-mode");
    dark.onclick = function () {
      document.body.classList.toggle("dark-theme");
    };
    var dark = document.getElementById("dark-mode-phone");
    dark.onclick = function () {
      document.body.classList.toggle("dark-theme");
    };

    const burger = document.getElementById("burger");
    const nav = document.getElementById("linker");

    burger.onclick = function () {
      nav.classList.toggle("active");
    };
    document.onclick = function (er) {
      if (er.target.id !== "burger" && er.target.id !== "nav") {
        nav.classList.remove("active");
      }
    };
    </script>
  </html>
