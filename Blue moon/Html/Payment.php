<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Css/payments.css" />
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
  include('header.php');
  session_start();
  if (isset($_POST['room_name'])) {
    $roomNames = $_POST['room_name'];
    $roomSizes = $_POST['room_size'];
    $roomPrices = $_POST['room_price'];

    // Loop through the arrays to access each value
    for ($i = 0; $i < count($roomNames); $i++) {
        $name = $roomNames[$i];
        $size = $roomSizes[$i];  
    }
    $sv="localhost";
    $us="root";
    $ps="";
    $db="guest";
    $conn=mysqli_connect($sv,$us,$ps,$db);
    $q="SELECT ROOM_ID from tbl_room WHERE R_Size='$size' and R_Type='$name'";
    $r=mysqli_query($conn,$q);
    while($row=mysqli_fetch_assoc($r)){
    $_SESSION['name']=$row['ROOM_ID'];
   }
   
}
 include("pv.php");
  ?>
  <body>
    <br><br><br>
  <form action="" method="POST">

                            
    <div class="container" style="margin-top: -60px">
    
    <br>
    <h4 class="suc ddyu" style="background-color:transparent; color: red;font-size:40px;width:100%;text-align: center;margin-left: 0;position: relative;top: 70px;color: green;" ><?php echo $inserted;?></h4> 
    <h4 class="suc ddyu" style="background-color:transparent; color: red;font-size:40px;width:100%;text-align: center;margin-left: 0;position: relative;top: 10px;color: green;" ><?php echo $notinserted;?></h4><br>
      <h1 class=success></h1>
      <h1><span style="color: black; font-size:17px">Required <span style="color: red; font-size:30px;">*</span></span><br>Customer Contact Info </h1>
      <div class="row">
        <div class="fr">
          <label for="">First Name <span>*</span></label><br>
          <input type="text" class="input" name="fn">
          <h3><?php echo $fnerr?></h3>
        </div>
        <div class="fr fr2">
          <label for="">Last Name <span>*</span></label><br>
          <input type="text" name="ln">
          <h3><?php echo $lnerr?></h3>
        </div>
      </div>
      <div class="row">
        <div class="fr">
          <label for="">Age <span>*</span></label><br>
          <input type="text" class="input" name="age">
          <h3><?php echo $agerr?></h3>
        </div>
        <div class="fr fr2">
          <label for="">Sex <span>*</span></label><br>
          <input type="text" name="sex">
          <h3><?php echo $sxerr?></h3>
        </div>
      </div>
      <div class="row">
        <div class="fr">
          <label for="">Phone <span>*</span></label><br>
          <input type="text" name="ph">
          <h3><?php echo $pherr?></h3>
        </div>
        <div class="fr fr2">
          <label for="">Email <span>*</span></label><br>
          <input type="text" name="em"><br >
          
          <h3><?php echo $emerr?></h3>
        </div>
      </div>
    
      <h1>Customer Address Info</h1>
      <div class="row">
        <div class="fr">
          <label for="">Country<span>*</span></label><br>
                                <select name="co" id="city" style="width: 74%;box-shadow:none;border-radius:0" >
                                    <option value="">Country</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Usa">USA</option>
                                </select>
          <h3><?php echo $coerr?></h3>
        </div>
        <div class="fr fr2">
          <label for="">City <span>*</span></label><br>
          <select name="ct" id="city" style="width: 74%;border-radius:0;box-shadow:none;" >
                                <option value="">City</option>
                                    <option value="Addis Ababa">Addis Ababa</option>
                                    <option value="Nairobi">Nairobi</option>
                                    <option value="London">London</option>
                                </select>
          <h3><?php echo $cterr?></h3>
        </div>
      </div>
    

      
      <h1 class="payinfo">Payment Information</h1>
      <br><br>
      <div class="row row2" style="margin-top: 10px;">
        <div class="fr">
          <label for=""><i class="fa-solid fa-credit-card"></i> Card Number <span>*</span></label><br>
      
         <input type="text" name="cn">
          <h3><?php echo   $cnerr?></h3>
        </div>
        <div class="fr" style="margin-left: 12%;">
          <label for=""><i class="fa-solid fa-key "></i></i> KEY<span>*</span></label><br>
         <input type="text" name="cp">
          <h3><?php echo $cperr;?></h3>
        </div>
        
      </div>
     
      <br><br><br>
    </div>
    
    <br><br><br><br><br>
    
    <div class="submite" >
      <button name="submit" >Submite</button>
    </div>
    
  </form>



  <?php
  include('footer.php');
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
