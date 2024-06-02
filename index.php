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
        <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal3">Sign In<span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal1">Sign Up<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal4">Org Registration</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal2">Donation<span class="sr-only">(current)</span></a>
      </li>
      
     <li class="nav-item active">
        <a class="nav-link" href="#aboutUs">About Us</a>
      </li>
     </ul>
    
        <ul class="navbar-nav ml-auto"> 
            <li class="nav-item active">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal6"> 
                    <img src="admin.png" width="40" height="40" class="d-inline-block align-top" alt="">
                </a>
                <span class="sr-only">(current)</span></a>
            </li>
        </ul>
  </div>
</nav>

<! navbar closing>

<! image slider opening>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="home9.avif" alt="First slide" >
            <div class="bg-text">
                <h1 style="font-size:50px">Welcome to CareConnect</h1>
                <p>Holistic Well-being System for Elderly & Orphaned Residents</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="home10.jpg" alt="Second slide">
            <div class="bg-text">
                <h1 style="font-size:50px">Welcome to CareConnect</h1>
                <p>Holistic Well-being System for Elderly & Orphaned Residents</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="home3.jpg" alt="Third slide" >
            <div class="bg-text">
                <h1 style="font-size:50px">Welcome to CareConnect</h1>
                <p>Holistic Well-being System for Elderly & Orphaned Residents</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="home8.avif" alt="Fourth slide">
            <div class="bg-text">
                <h1 style="font-size:50px">Welcome to CareConnect</h1>
                <p>Holistic Well-being System for Elderly & Orphaned Residents</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="home5.avif" alt="fifth slide">
            <div class="bg-text">
                <h1 style="font-size:50px">Welcome to CareConnect</h1>
                <p>Holistic Well-being System for Elderly & Orphaned Residents</p>
            </div>
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

<style>
        .bg-text {
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }

        /* Adjusting text styles */
        .bg-text h1, .bg-text p {
            margin: 0;
            padding: 5px;
        }

        /* Style for carousel images */
        .carousel-item {
            position: relative; /* Ensures that the text overlay stays on top */
        }

        /* Making the text overlay responsive */
        @media (max-width: 768px) {
            .bg-text {
                width: 90%;
            }
        }
</style>
<script>
        // JavaScript for initializing the carousel
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
<! closing of image slider >

<div class="white-space"></div>
<div id="aboutUs" class="container">
   <div class="row align-items-center">
      <div class="col-md-8">
    <div class="about-section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('about')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('vision')">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('mission')">Mission</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="about-content">
            <p>
                <h2>About Us</h2>
                Welcome to CareConnect, a holistic well-being system dedicated to serving elderly and orphaned residents with compassion and support. At CareConnect, we strive to create a nurturing environment where every individual can thrive, find solace, and foster connections within our community.
            </p>
        </div>

        <div id="vision-content" style="display: none;">
            <p>
                <h2>Vision</h2>
                Our vision at CareConnect is to redefine compassionate care for the elderly and orphaned residents, fostering a supportive ecosystem that promotes holistic well-being and community engagement.
            </p>
        </div>

        <div id="mission-content" style="display: none;">
            <p>
                <h2>Mission</h2>
                Our mission is to provide a platform where individuals can contribute to the welfare of elderly and orphaned residents through donations, support services, and community engagement. We aim to facilitate connections, promote emotional well-being, and empower individuals to make a positive impact on the lives of those in need.
            </p>
        </div>
    </div>
</div>

<script>
    function showContent(content) {
        document.getElementById('about-content').style.display = content === 'about' ? 'block' : 'none';
        document.getElementById('vision-content').style.display = content === 'vision' ? 'block' : 'none';
        document.getElementById('mission-content').style.display = content === 'mission' ? 'block' : 'none';
        
        // Prevent the default anchor link behavior
        event.preventDefault();
    }
</script>

            <div class="col-md-4">
                <!-- Image placed here -->
                <img src="pic7.jpg" alt="Image" class="img-fluid" style="margin-top: -5px; margin-bottom: -5px;">
            </div>
        </div>
    </div>
    
<div class="white-space"></div>
<style>
    /* Custom CSS */
    .about-section {
        background-color: #D6C4B0; /* Set background color */
        padding: 30px; /* Add some padding */
    }

    .about-section p {
        margin-bottom: 0; /* Remove bottom margin for the paragraph */
        padding: 20px; 
    }

    .about-section img {
        max-width: 100%; /* Ensure the image doesn't exceed its container */
        display: block; /* Make the image a block element for centering */
        margin: 0 auto; /* Center the image horizontally */
        margin-top: -5px; /* Adjusted top margin */
        margin-bottom: -5px; /* Adjusted bottom margin */
    }

    /* Styling for the white space after the paragraph */
    .white-space {
        height: 1.5cm; /* Set the height of the white space */
        background-color: #F5F1EE; /* Set background color */
    }
</style>

    
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#F5F1EE !important;">
        <form action="index.php">
            
            <div class="row">
  <div class="col">
           <label for="inputEmail4">Name</label>
    <input type="text" name="n" class="form-control" placeholder="Name" aria-label="First name" required>
  </div>
 
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="e" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password"  name="p" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="a" class="form-control" id="inputAddress" placeholder="Enter your address" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Mobile No</label>
    <input type="text" name="m" class="form-control" id="inputAddress2" placeholder="Enter your Mobile No" maxlength="10" required>
  </div>
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value="Sign in" name="x">
</form>
      </div>
      <div class="modal-footer" style="background-color:#F5F1EE !important;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Register Organisation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#F5F1EE !important;">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            
            <div class="row">
  <div class="col">
           <label for="inputEmail4">Organisation Name</label>
    <input type="text" name="n" class="form-control" placeholder="Name" aria-label="First name" required>
  </div>
 
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="e" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact</label>
      <input type="text"  name="m" class="form-control" id="inputPassword4" placeholder="Contact No." maxlength="10" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="a" class="form-control" id="inputAddress" placeholder="Enter your address" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Area of work</label>
    <select name="aow" id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>orphange</option>
          <option>old age home</option>
      </select>
    </div>
    <div class="form-group">
    <label for="inputAddress2">Upload Picture1</label>
   <input type="file" name="p1">
    </div>
    <div class="form-group">
    <label for="inputAddress2">Upload Picture2</label>
   <input type="file" name="p2">
    </div>
 
 <div class="form-group">
    <label for="inputAddress2">Upload Picture3</label>
   <input type="file" name="p3">
    </div>
 
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value="Register" name="reg">
</form>
      </div>
      <div class="modal-footer"  style="background-color:#F5F1EE !important;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>












<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel1">Donation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="background-color:#F5F1EE !important;">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            
            <div class="row">
  <div class="col">
           <label for="inputEmail4">Name</label>
    <input type="text" name="n" class="form-control" placeholder="Name" aria-label="First name" required>
  </div>
 
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="e" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="a" class="form-control" id="inputAddress" placeholder="Enter your address" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Mobile No</label>
    <input type="text" name="m" class="form-control" id="inputAddress2" placeholder="Enter your Mobile No" maxlength="10">
  </div>
 
  <div class="form-group">
            <label for="inputState">Select Organization for Donation</label>
            <select id="inputState" name="or" class="form-control">
                <option selected></option>
                <!-- PHP code to dynamically populate options -->
                <?php
                // Connect to the database
                $conn = mysqli_connect("localhost", "id21833050_projectkit", "Project@1234", "id21833050_project23");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Query to select org emails
                $sql = "SELECT name FROM org";

                // Execute the query
                $result = mysqli_query($conn, $sql);

                // Check if any rows are returned
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each row and display org email as an option
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option>" . $row["name"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
                <!-- End of PHP code -->
            </select>
        </div>
  
  <script>
      function a1()
      {
          document.getElementById("amt").type="text";
              document.getElementById("amt1").style="display:block";
          
      }
     function a2()
      {
          document.getElementById("f").type="file";
          
      }
      function a3()
      {
          document.getElementById("eat").type="file";
          
      }
      function a4()
      {
          document.getElementById("b").type="file";
          
           
          
      }
      

  </script>
   <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox"  onclick="a1()" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Amount &nbsp;&nbsp;<input type="hidden"  placeholder="Enter Amount In Rs/-" id="amt" name="amt"> &nbsp;&nbsp;
                           <img src="QR.png"  style="display:none " id="amt1" name="amt" align="right" width="150" height="150" >
      </label><br>
      
      <input class="form-check-input" type="checkbox"  onclick="a2()" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Accessories &nbsp;&nbsp;<input type="hidden" id="f" name="f">
      </label><br>
      
      <input class="form-check-input" type="checkbox" onclick="a3()" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Edible Items &nbsp;&nbsp;<input type="hidden" id="eat" name="eat">
      </label><br>   
      
      <input class="form-check-input" type="checkbox"  onclick="a4()" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Study Materials &nbsp;&nbsp;<input type="hidden"  placeholder="please provide brief description" id="b" name="b">
      </label><br>
      
    </div>
      </label>
  </div>
  
  
  <input type="submit" class="btn btn-primary" value="Submit" name="z">
</form>
      </div>
      <div class="modal-footer"  style="background-color:#F5F1EE !important;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel1">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="background-color:#F5F1EE !important;">
        <form action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="e" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="p" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input  type="submit" class="btn btn-primary" value="Submit" name="y">
</form>
      </div>
      <div class="modal-footer"  style="background-color:#F5F1EE !important;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel1">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="background-color:#F5F1EE !important;">
        <form action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" name="e" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admin Username" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="p" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  <input  type="submit" class="btn btn-primary" value="Login" name="w">
</form>
      </div>
      <div class="modal-footer"  style="background-color:#F5F1EE !important;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



<div class="container text-center">
  <h2>CareConnect Services</h2><br><br>

<div class="card-deck d-flex justify-content-center" >
 <div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="home11.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Donation Platform:</h5>
      <p class="card-text">Easily donate money, accessories, study materials, and more. Track your donations and see contributions from others by signing up and logging in.</p>
    </div>
  </div>
  
 <div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="home12.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Query Assistance:</h5>
      <p class="card-text">Have questions or need assistance? Our team is ready to help. Submit queries to the admin through the platform and receive prompt assistance.</p>
    </div>
  </div>
  
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="home13.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> Explore Shelters</h5>
      <p class="card-text">Discover information about shelters for visitation, including orphanages and old age homes. Additionally, explore adoption options specifically available for orphanages.</p>
    </div>
  </div>
</div>
</div>




<?php
if(isset($_REQUEST["x"]))
{
    $p1=$_REQUEST["n"];
    $p2=$_REQUEST["e"];
    $p3=$_REQUEST["p"];
    $p4=$_REQUEST["a"];
    $p5=$_REQUEST["m"];
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    mysqli_query($conn,"insert into customer values('$p2','$p3','$p4','$p5','$p1')");
    ?>
    <script>alert("You  are register!!!");</script>
    <?php
    
    
    
}
?>

<?php
if(isset($_REQUEST["z"]))
{
    $file_name = $_FILES['f']['name'];
    $file_tmp =$_FILES['f']['tmp_name'];
    $file_name1 = $_FILES['eat']['name'];
    $file_tmp1 =$_FILES['eat']['tmp_name'];
    $file_name2 = $_FILES['b']['name'];
    $file_tmp2 =$_FILES['b']['tmp_name'];
    move_uploaded_file($file_tmp,"upload/".$file_name);
      move_uploaded_file($file_tmp1,"upload/".$file_name1);
        move_uploaded_file($file_tmp2,"upload/".$file_name2);
    $p1=$_REQUEST["n"];
    $p2=$_REQUEST["e"];
    $p3=$_REQUEST["a"];
    $p4=$_REQUEST["m"];
    $p5=$_REQUEST["amt"];
     $p6=$_REQUEST["f"];
      
       $p7=$_REQUEST["eat"];
        $p8=$_REQUEST["b"];
        $p9=$_REQUEST["or"];
         
        
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    mysqli_query($conn,"insert into Donation values('$p1','$p2','$p3','$p4','$p5','$file_name','$file_name1','$file_name2','$p9')");
    ?>
    <script>alert("ThnakYou !!!");</script>
    <?php
    
    
    
}
?>
<?php
if(isset($_REQUEST["y"]))
{
    $p1=$_REQUEST["e"];
    $p2=$_REQUEST["p"];
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    $res=mysqli_query($conn,"select * from customer where email='$p1' and password='$p2'");
if(($rows=mysqli_fetch_array($res)))
{
    session_start();
    $_SESSION["username"]=$rows[4];
    $_SESSION["email"]=$rows[0];
   header("location:profile.php"); 
}
else
{
    ?>
    <script>alert("Invalid Login details")</script>
    <?php
}
    
}
    ?>
    
    
    <?php
if(isset($_REQUEST["w"]))
{
    $p1=$_REQUEST["e"];
    $p2=$_REQUEST["p"];
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    $res=mysqli_query($conn,"select * from admin where username='$p1' and pwd='$p2'");
if(($rows=mysqli_fetch_array($res)))
{
    session_start();
    $_SESSION["username"]=$rows[0];
    
   header("location:admin.php"); 
}
else
{
    ?>
    <script>alert("Invalid Login details")</script>
    <?php
}
    
}
    ?>
    
    <?php
if(isset($_REQUEST["reg"]))
{
    $file_name = $_FILES['p1']['name'];
    $file_tmp =$_FILES['p1']['tmp_name'];
    $file_name1 = $_FILES['p2']['name'];
    $file_tmp1 =$_FILES['p2']['tmp_name'];
    $file_name2 = $_FILES['p3']['name'];
    $file_tmp2 =$_FILES['p3']['tmp_name'];
    move_uploaded_file($file_tmp,"upload/".$file_name);
      move_uploaded_file($file_tmp1,"upload/".$file_name1);
        move_uploaded_file($file_tmp2,"upload/".$file_name2);
    $p1=$_REQUEST["n"];
    $p2=$_REQUEST["e"];
    $p3=$_REQUEST["m"];
    $p4=$_REQUEST["a"];
    $p5=$_REQUEST["aow"];
     
         
        
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    mysqli_query($conn,"insert into org values('$p1','$p2','$p3','$p4','$p5','$file_name','$file_name1','$file_name2')");
    ?>
    <script>alert("Register Successfully !!!");</script>
    <?php
    
    
    
}
?>
<?php
if(isset($_REQUEST["y"]))
{
    $p1=$_REQUEST["e"];
    $p2=$_REQUEST["p"];
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    $res=mysqli_query($conn,"select * from customer where email='$p1' and password='$p2'");
if(($rows=mysqli_fetch_array($res)))
{
    session_start();
    $_SESSION["username"]=$rows[4];
   header("location:profile.php"); 
}
else
{
    ?>
    <script>alert("Invalid Login details")</script>
    <?php
}
    
}
    ?>
    
    <div class="position-sticky" style="background-color: #D6C4B0; text-align: center; padding: 20px; color: white;">
    <div>&copy; CareConnect: Holistic Well-being System for Elderly & Orphaned Residents</div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>