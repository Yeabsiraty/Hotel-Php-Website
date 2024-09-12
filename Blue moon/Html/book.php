<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Css/books.css">
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
  
include('valid.php');
  include('header.php');
session_start();

  ?>
  <body>
    <div class="top-image">
      <img src="../img/img (1).jpg" alt="" />
    </div>
    <div class="img-top">
      <h3>Guinea Conakry St,Kazanchise Addis Ababa, Ethiopa,</h3>
      <h3><i class="fa-solid fa-phone"></i> 251-11-6813122</h3>
      <h3><i class="fa-solid fa-link"></i> http://www.bluemoonhotel.com</h3>
    </div>
    

  <form  action="" method="POST" class="check-if formcheck" style="margin-top: 60px;">
      <div class="adultsc">
        <h6>Adult</h6>
        <select name="select-n-adult" id="">
        <option value="">Select</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
        <h4 class="error"><?php echo $aerr;?></h4><br>
      </div>
      <div class="childrensc">
        <h6>Children</h6>
        <select name="select-childrens" id="">
          <option value="">select</option>
          <option value="no">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <h4 class="error"><?php echo $cerr;?></h4><br>
      </div>
      <div class="checkin">
       <h6>Check In</h6>
       <input type="date" name="chi"><br>
       
       <h4 class="error"><?php echo $ierr;?></h4><br>
       </div>
      <div class="checkout">
     <h6>Check-out</h6>
     <input type="date" name="cho"><br>
        <h4 class="error">
          <?php echo $oerr;?></h4><br>
     </div>
     <div class="btnch">
     <button name="check" name="check">Check</button>
     </div>
     <br>
</form>

      

    <div class="below" >

    <form action="" method="POST" style="background-color: transparent;">
      <div class="select">
        <h1>Select Room</h1>
      </div>
      <div class="one" style="background-color: transparent;color:white"> 
          <br><h3 style="margin:10px 0 0 30px;">CHECK IN<span style="visibility: hidden;">.as</span> </h3>
          <h4 class="calc" style="color:white;font-size:24"><?php echo $chi;?></h4></div>
        <div class="one ones" style="color:white"><h3 style="margin-left: 30px;">CHECK OUT</h3>
          <h4 class="calc" style="color:white;font-size:24"><?php echo $cho;?></h4>
        </div>
        
        <div class="one" style="background-color: transparent; margin-top:10px;color:white"> 
          <br><h3 style="margin-left: 30px;">ADULT </h3><br>
          <h4 class="calc" style="color:white;font-size:24;margin-left: 30%"><?php echo $ad;?></h4></div>
        <div class="one ones" style="color:white"><h3 style="margin-left: 30px;">CHILD</h3><br><br>
        <h4 class="calc" style="color:white;font-size:24;margin-left: 30%"><?php echo $ch;?></h4><br><span id="suc"></span>
        </div>
        </form>
      </div>
      </div>
      <br><br>
     
          
<?php

include('db.php');

?>
  
  
      
      <br><br><br>
    </div>
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
    
    function toogle(){
      var x=document.getElementById('filters');
      if(x.style.display === "none"){
        x.style.display="block";
      }
      else{
        x.style.display = "none";
      }
    }


  </script>
</html>
