<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Css/ebook.css" />
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
  include('header.php')
  ?>
    <body>
    
  <form action="">
    <div class="container">
      <h1 class=success></h1>
      <h1><span style=" font-size:17px" class="req">Required <span style="color: red; font-size:30px;">*</span></span><br>Customer Contact Info </h1>
      <div class="row">
        <div class="fr">
          <label for="">First Name <span>*</span></label><br>
          <input type="text" class="input">
          <h3></h3>
        </div>
        <div class="fr fr2">
          <label for="">Last Name <span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
      </div>
      <div class="row">
        <div class="fr">
          <label for="">Phone <span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
        <div class="fr fr2">
          <label for="">Email <span>*</span></label><br>
          <input type="text"><br>
          <h5 style="color: black;">This will be the email which we send the confirmation number</h5>
          <h3></h3>
        </div>
      </div>
    
      <h1>Guest Info</h1>
      <div class="row">
        <div class="fr">
          <label for="">Number Of Guests<span>*</span></label><br>
          <input type="number">
          <h3></h3>
        </div>
        <div class="fr fr2  dd">
          <label for=""><span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
      </div>
      <div class="row ">
        <div class="fr dd">
          <label for="">Zip Code<span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
        
      </div>
    
      
      <h1 class="payinfo">Payment Information</h1>
      <div class="imgs">
      <img src="../img/icons8-paypal-48.png" alt="">
      <img src="../img/icons8-visa-48.png" alt="">
      <img src="../img/icons8-mastercard-48.png" alt="">
      <img src="../img/icons8-payoneer-48.png" alt="">
      </div>
      <div class="row row2">
        <div class="fr">
          <label for=""><i class="fa-solid fa-credit-card"></i> Card Number <span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
        <div class="fr fr2">
          <label for="">Expire Date(MM/YY)<span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
      </div>
      <div class="row">
        <div class="fr">
          <label for="">CVV <title># or $ Digit Number On The Card Back</title><span>*</span></label><br>
          <input type="text">
          <h3></h3>
        </div>
        <div class="fr fr2">
          <label for="">Name On Card <span>*</span></label><br>
          <input type="text"><br>
          <h3></h3>
        </div>
      </div>
      <br><br><br>
    </div>
    
    <br><br><br><br><br><br><br>
    <div class="policy">
      <div class="pri">
      <button id=btn-po> <h3>Privacy Policy <i class="fa-solid fa-angle-down"></i></h3></button>
      <br>
      </div>
      <div class="pritxt" id="pritxt">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem iste esse consequuntur modi eaque magni, labore, autem nemo illum cumque ipsa dignissimos! Vel similique iste excepturi unde necessitatibus deleniti obcaecati dolorum molestias distinctio quia. Alias magni vero esse eos, iusto fugiat est. Officia asperiores esse provident, adipisci natus labore optio illum magni voluptates error cumque quod eveniet minima nulla quae atque facere repellendus dolor. Corrupti repellendus odio laborum quis, soluta expedita vero consequuntur asperiores? Obcaecati voluptatem praesentium rerum doloribus repellendus rem dolor suscipit animi consectetur voluptates? Quas facere molestiae neque delectus eaque! Dolore molestias cumque autem cum minus haru Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem iste esse consequuntur modi eaque magni, labore, autem nemo illum cumque ipsa dignissimos! Vel similique iste excepturi unde necessitatibus deleniti obcaecati dolorum molestias distinctio quia. Alias magni vero esse eos, iusto fugiat est. Officia asperiores esse provident, adipisci natus labore optio illum magni voluptates error cumque quod eveniet minima nulla quae atque facere repellendus dolor. Corrupti repellendus odio laborum quis, soluta expedita vero consequuntur asperiores? Obcaecati voluptatem praesentium rerum doloribus repellendus rem dolor suscipit animi consectetur voluptates? Quas facere molestiae neque delectus eaque! Dolore molestias cumque autem cum minus haru>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem iste esse consequuntur modi eaque magni, labore, autem nemo illum cumque ipsa dignissimos! Vel similique iste excepturi unde necessitatibus deleniti obcaecati dolorum molestias distinctio quia. Alias magni vero esse eos, iusto fugiat est. Officia asperiores esse provident, adipisci natus labore optio illum magni voluptates error cumque quod eveniet minima nulla quae atque facere repellendus dolor. Corrupti repellendus odio laborum quis, soluta expedita vero consequuntur asperiores? Obcaecati voluptatem praesentium rerum doloribus repellendus rem dolor suscipit animi consectetur voluptates? Quas facere molestiae neque delectus eaque! Dolore molestias cumque autem cum minus haru Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem iste esse consequuntur modi eaque magni, labore, autem nemo illum cumque ipsa dignissimos! Vel similique iste excepturi unde necessitatibus deleniti obcaecati dolorum molestias distinctio quia. Alias magni vero esse eos, iusto fugiat est. Officia asperiores esse provident, adipisci natus labore optio illum magni voluptates error cumque quod eveniet minima nulla quae atque facere repellendus dolor. Corrupti repellendus odio laborum quis, soluta expedita vero consequuntur asperiores? Obcaecati voluptatem praesentium rerum doloribus repellendus rem dolor suscipit animi consectetur voluptates? Quas facere molestiae neque delectus eaque! Dolore molestias cumque autem cum minus haru</p><br>
      </div>
      <div class="check">
      <input type="checkbox"><span style="margin-left: -30px;">*</span> <span style="color: black; " class="agree">Agree terms and conditions</span>
      <h3></h3>
    
      </div>
   
    </div>
    <div class="submite">
      <button>Submite</button>
    </div>
  </form>


  </body>
  <?php
  include('footer.php')
  ?>

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
    
    var hide=document.getElementById('pritxt');
    var btn=document.getElementById('btn-po');
    btn.addEventListener('click',()=>{
      if(hide.style.display=='none'){
        hide.style.display=='block';
      }
      else{
        hide.style.display=='none';
      }
    });
  </script>
</html>
