<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Css/my-books.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Book</title>
  </head>
  <?php
  include("header.php");
    include('validreserv.php');
  ?>
  <body>
    <h1 class="text-find">Find Reservations</h1>
   
    <form action="" method="POST">
      <h2 class="with">With Email Address</h2>
      <input type="text" name="ell" class="inp-email" placeholder="Email" /><br />
      <h3 style="background-color: transparent; color:red; margin:10px 0 0 -33%"><?php echo $note?></h3>
     <button class="btns" name="finds">Find Reservation</button>
    </form>
   
  </body>
  <?php
    include('footer.php');
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
  </script>
</html>
