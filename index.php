<?php
//Yellow =functions 
$con = mysqli_connect('localhost', 'root');                         //connecting to database (declaration in php $)
mysqli_select_db($con, 'magicshop');                                //connection strings parameter database (where = condition)
$sql = "select * from album where featured=1";                      // variable sql variable query 
$featured = $con->query($sql);                                      //executing connection

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title> Magic Shop</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>        

<body>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#FAAFBE">
    <div class="logoicon">
      <img src="florallogo.png" alt="BTS" style="width:110px;height:107px;"></a>
    </div>
    <a class="navbar-brand" href="#">Magic Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
      <ul class="navbar-nav mr-auto">    
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <div class="fbicon">
      <a href="https://www.facebook.com/profile.php?id=100010200582423"><img src="fb.png" alt="Facebook" style="width:90px;height:90x;"></a>
    </div>
    <div class="igicon">
      <img src="ig.png" alt="Instagram" style="width:45px;height:45px;"></a>
    </div>
    <div class="twtricon">
      <img src="twtr.png" alt="Twitter" style="width:45px;height:45px;"></a>
    </div>
  </nav>
  <div class=row>  
    <?php
    while ($album = mysqli_fetch_assoc($featured)) :
    ?>
      <div class="card" style="width: 19rem;">
        <img src="<?= $album['image']; ?>" class="album m-4" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Product: <?= $album['albumtitle']; ?></h5>
          <p class="card-text">PRICE: <?= $album['price']; ?></p>
          <p class="card-text">DEETS: <?= $album['details']; ?></p>
          <div class="cartchaticon">
            <img src="cart.png" alt="cart" style="width:70px;height:50px;"></a><img src="chat.png" alt="chat" style="width:70px;height:70px;"></a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>