<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CareConnect</title>
  </head>
  <body style="background-color: #F5F1EE;" >
    
    <! navbar opening>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#F5F1EE !important;">
    <a class="navbar-brand" href="index.php">
    <img src="logo.jpg" width="120" height="60" class="d-inline-block align-top" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
 
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="profile.php">Go to Profile</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      
    </form>
  </div>
</nav>

<?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$str=$_REQUEST["id"];
$res=mysqli_query($conn,"select * from Donation where Name='$str'");
 


while(($rows=mysqli_fetch_array($res)))

{
    
    ?>
<center>
<div class="card mb-3" style="max-width: 1000px ; ">
    <div class="row g-0">
        <div class="col-md-4" style="background-color:#D6C4B0 !important;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <div>
                            <h5 > Donated Items </h5>
                        </div>
                        <figcaption style="background-color: black;color: white; font-style: italic; padding: 1px; text-align: center;"> Accessories 
                            <img class="img-fluid rounded-start"  src="upload/<?php echo$rows[5]; ?>" style="height:400px;width:400px; margin:auto" alt="First slide"> 
                        </figcaption>
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <h5> Donated Items </h5>
                        </div>
                        <figcaption style="background-color: black;color: white; font-style: italic; padding: 1px; text-align: center;"> Edible Items 
                            <img class="img-fluid rounded-start"  src="upload/<?php echo$rows[6]; ?>"style="height:400px;width:400px; margin:auto" alt="Second slide"> 
                        </figcaption>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <h5> Donated Items </h5>
                        </div>
                        <figcaption style="background-color: black;color: white; font-style: italic; padding: 1px; text-align: center;"> Study Materials
                            <img class="img-fluid rounded-start" src="upload/<?php echo$rows[7]; ?>"  style="height:400px;width:400px; margin:auto" alt="Third slide"> 
                        </figcaption>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-8" style="background-color:#D6C4B0 !important;">
            <div class="card-body" style="text-align: justify; ">
                <h5 class="card-title"><u>Donor Details</u></h5>
                <p class="card-text"><strong>Name:</strong> <?php echo$rows[0]; ?> </p>
                <p class="card-text"><strong>E-mail:</strong> <?php echo$rows[1]; ?></p>
                <p class="card-text"><strong>Address:</strong> <?php echo$rows[2]; ?> </p>
                <p class="card-text"><strong>Mobile No:</strong> <?php echo maskMobileNumber($rows[3]); ?> </p>
                <p class="card-text"><strong>Amount Donated:</strong> <?php echo$rows[4]; ?></p>
                <p class="card-text"><strong>Recipient Organization: </strong> <?php echo$rows[8]; ?></p>
       
                    </p>        
                
            </div>
        </div>
    </div>
</div>

    <?php
}
?>
<?php
function maskMobileNumber($mobileNumber) {
    $length = strlen($mobileNumber);
    $maskedNumber = str_repeat('X', $length - 2) . substr($mobileNumber, -2);
    return $maskedNumber;
}
?>


<! navbar closing>

<div class="fixed-bottom" style="background-color: #D6C4B0; text-align: center; padding: 20px; color: white; ">
    <div>&copy; CareConnect: Holistic Well-being System for Elderly & Orphaned Residents</div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>