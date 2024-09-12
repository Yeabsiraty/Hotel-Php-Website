<?php
include('header.php');
include_once ("function.php");
include("contactvalid.php");

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Css/contacts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
</head>

<body>
    
       <div class="contact-tx">
        <h1>Contact Us<hr class="ver"></h1>
        <hr class="hor">
        
        <i class="fa-brands fa-brandss fa-facebook"></i>
        <i class="fa-brands fa-brandss fa-instagram"></i>
        <i class="fa-brands fa-brandss fa-twitter"></i>
        <i class="fa-brands fa-brandss fa-telegram"></i>
        <i class="fa-brands fa-brandss fa-tiktok"></i>
       </div>
       <form action=""onsubmit="myfun();" method="POST">
    
       <h1>𝖕𝖑𝖊𝖆𝖘𝖊 𝖋𝖎𝖑𝖑 𝖔𝖚𝖙 𝖙𝖍𝖎𝖘 𝖋𝖔𝖗𝖒</h1>
       <h5 style="background-color: transparent;text-align:center;color: aqua;font-size:50px;"><?php echo $cons?></h5>
        <div class="row">
            <div class="gr">
        <label>First name <span>*</span></label> 
        <input type="text" name="fn" id="f_name"><br>
        <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php echo $fnerr?></h5>
    </div>
    <div class="gr">
        <label> E-mail address confirm <span>*</span></label>
        <input type="text" name="em" id="l_name"> <br>
        <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php 
           echo $emerr?></h5>
        </div>
    </div>
    
    <div class="row">
        <div class="gr">
        <label>  Last name<span>*</span></label> 
       <input type="text" name="ln" id="email1"><br>
        <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php 
              echo $lnerr?></h5>
       </div>
       <div class="gr">
        <label>  Phone no  <span>*</span></label> 
        <input type="text" name="ph" id="email"><br>
        <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php 
              echo $pherr?></h5>
    </div>
    
    </div>
    <div class="row">
        <div class="gr">
        <label> E-mail address <span>*</span></label> 
       <input type="text" name="em" id="email1"><br>
       <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php 
              echo $emerr?></h5>
       </div>
       <div class="gr">
        <label>Subject <span>*</span></label> 
        <input type="text" name="sub" id="email"><br>
        <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php 
             echo $suberr?></h5>
    </div>
    
    </div>
    
    <div class="textarea">
        <label>Your message <span>*</span></label> 
       <textarea name="txt" id="text"></textarea><br>
        <h5 style="margin-top:-10px;font-size:14px;background-color: transparent;color:red; "><?php 
             echo $txterr?></h5>
    </div>
       <input type="submit" class="buttond" name="submit" placeholder="SUBMIT">
       <br><br><br><br>
       </form>

       <?php
  include_once ("footer.php");
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
