<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Css/event.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event</title>
  </head>
  <body>
  <?php
      include('header.php');
    ?>
    <div class="top-image">
      <img src="../img/tttt.jpg"class="imgs" />
      <img src="../img/catr.jpg" alt="" class="imgs" />
    </div>
    <div class="event"><h1>𝓔𝓿𝓮𝓷𝓽𝓼</h1></div>
    <div class="weeding">
      <img src="../img/weed.jpg" alt="" />
      <div class="weeding-text">
        <h1>Weeding Event</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
          aut dolore odit. Nihil ab nulla harum odio minima corporis, unde
          deleniti, consequatur praesentium recusandae laborum quae non voluptas
          doloremque expedita.
        </p>

        <a href="ebook.php"><button>Book Now</button></a>
      </div>
    </div>
    <div class="meeting weeding">
      <div class="meeting-text weeding-text">
        <h1>Meeting Event</h1>
        <p>
          ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aut
          dolore odit. Nihil ab nulla harum odio minima corporis, unde deleniti,
          consequatur praesentium recusandae laborum quae non voluptas
          doloremque expedita.
        </p>
        <a href="ebook.php"><button>Book Now</button></a>
      </div>
      <img src="../img/tttt.jpg" alt="" />
    </div>
    <div class="catering weeding">
      <img src="../img/catr.jpg" alt="" />
      <div class="catering-text weeding-text">
        <h1>Catering Events</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
          aut dolore odit. Nihil ab nulla harum odio minima corporis, unde
          deleniti, consequatur praesentium recusandae laborum quae non voluptas
          doloremque expedita.
        </p>
        <a href="ebook.php"><button>Book Now</button></a>
      </div>
    </div>

    <?php
      include('footer.php');
    ?>
  <script>
    var firstindex = 0;
function automaticslide() {
  setTimeout(automaticslide, 3000);
  var pics;
  const img = document.getElementsByClassName("imgs");
  for (pics = 0; pics < img.length; pics++) {
    img[pics].style.display = "none";
  }
  firstindex++;
  if (firstindex > img.length) {
    firstindex = 1;
  }
  img[firstindex - 1].style.display = "block";
}
automaticslide();
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
  </body>
</html>
