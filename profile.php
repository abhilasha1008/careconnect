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
<nav class="navbar navbar-expand-lg navbar-light bg-light"style="background-color:#F5F1EE !important;">
    <a class="navbar-brand" href="index.php">
    <img src="logo.jpg" width="120" height="60" class="d-inline-block align-top" alt="">
    </a>
    
    <a class="navbar-brand" data-toggle="modal" data-target="#exampleModal">Welcome : <?php
        session_start();
        $str=$_SESSION["email"];
        echo$_SESSION["username"];
        ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
 
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal3">See your Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal1">Change Password<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
         <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Query To Admin <span class="sr-only">(current)</span>
         </a> 
         </li>
      <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal5">Admin Response<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facilities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">Adoption</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">Visit-able Centers</a>
          <div class="dropdown-divider"></div>
	  
	  
        </div>
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


<center>
<div class="collapse" id="collapseExample">
    <div class="card w-50">
        <div class="card" >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;">Query To Admin</h5>
            <div class="card card-body">
                <form action="profile.php">
                
                    
                          <div class="form-group row">
                            <label for="inputAddress">Name</label>
                            <input type="text" class="form-control" name="n" id="inputAddress" placeholder="Enter Your Name" required>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" name="e" id="inputEmail4" placeholder="Enter your Email" required>
                        </div>
                         <div class="form-group row">
                            <label for="inputAddress">Subject</label>
                            <select class="form-control" name="s" required >
                                <option>Select </option>
                                <option>Queries related to adoption </option>
                                <option>Queries related to Visit-able Centers</option>
                                </select>
                        </div>
                         <div class="form-group row">
                            <label for="exampleFormControlTextarea1">Message </label>
                            <textarea class="form-control" name="m" id="exampleFormControlTextarea1" rows="2" placeholder="Write Your queries here..." required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" >
                                <label class="form-check-label" for="gridCheck">I consent to having this website store my submitted information so they can respond to my inquiry.
                                </label>
                            </div>
                        </div>
                <input type="submit"  name="q" class="btn btn-primary" value="Send Your Query">
                </form>
            </div>
        </div>
    </div>
</div></center>



<center>
<div class="collapse" id="collapseExample1">
    <div class="card w-50" style="width: 900px !important" >
        <div class="card" >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;">Adoption</h5>
            <div class="card card-body">
                <form action="profile.php">
                <?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from org where workarea='orphange'");
?>
   
                        <div class="table-responsive" >
  <table class="table">
      <tr>
          <th> </th>
          <th>Adoption Centres</th>
          <th>E-mail</th>
          <th>Contact No </th>
          <th> Address</th>
      </tr>
<?php
while(($rows=mysqli_fetch_array($res)))
{
                    
                    ?>
 
 <tr>
     <td><img src="upload/<?php echo$rows[5]; ?>" style="height:100px;width:120px;"></td>
     <td><?php echo$rows[0]; ?></td>
     <td><?php echo$rows[1]; ?></td>
     <td><?php echo$rows[2]; ?></td>
     <td><?php echo$rows[3]; ?></td>
     
     
 </tr>
                        <?php
                        
}
?>
                
  </table>
</div>
                        
                        
                
                </form>
            </div>
        </div>
    </div>
</div></center>


<center>
<div class="collapse" id="collapseExample2">
    <div class="card w-50" style="width: 900px !important" >
        <div class="card"  >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;">Visit-able Centers </h5>
            <div class="card card-body">
                <form action="profile.php">
                <?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from org");
?>
   
                        <div class="table-responsive" >
  <table class="table">
       <tr>
          <th> </th>
          <th>Shelters</th>
          <th>E-mail</th>
          <th>Contact No </th>
          <th> Address</th>
      </tr>
<?php
while(($rows=mysqli_fetch_array($res)))
{
                    
                    ?>
 
 <tr>
     <td><img src="upload/<?php echo$rows[5]; ?>" style="height:100px;width:120px;"></td>
     <td><?php echo$rows[0]; ?></td>
     <td><?php echo$rows[1]; ?></td>
     <td><?php echo$rows[2]; ?></td>
     <td><?php echo$rows[3]; ?></td>
     
     
 </tr>
                        <?php
                        
}
?>
                
  </table>
</div>
                        
                        
                
                </form>
            </div>
        </div>
    </div>
</div></center>

<?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from Donation");
?>
<div class="text-center mb-4" style="background-color: #D6C4B0; padding: 20px;">
    <h2 style="font-family: Arial, sans-serif; color: #333;">Donation Overview</h2>
    
</div>



    
<?php

while(($rows=mysqli_fetch_array($res)))
{
     $p1=$rows[5];
     $p2=$rows[6];
     $p3=$rows[7];
     
    ?>
   
    
    
    <div class="card" style="width: 18rem;float:left;margin:12px;">
        <?php
        if($p1!="")
        {
            ?>
             <img class="card-img-top" src="upload/<?php echo$rows[5]; ?>" style="height:280px;width:280px; margin:auto" alt="Dontated Items">
 
            <?php
        }
        else if($p2!="")
        {
            ?>
             <img class="card-img-top" src="upload/<?php echo$rows[6]; ?>" style="height:280px;width:280px; margin:auto" alt="Dontated Items">
 <?php
        }
        else
        {
            ?>
             <img class="card-img-top" src="upload/<?php echo$rows[7]; ?>" style="height:280px;width:280px; margin:auto" alt="Dontated Items">
 <?php
        }
        ?>
  <div class="card-body" >
    <h6 class="card-title">Name of the donar:</h6> <?php echo$rows[0];?>
    <p class="card-text"><h6> Donar Address:</h6><?php echo$rows[2]; ?></p>
    <a href="details.php?id=<?php echo$rows[0];?>" class="btn btn-primary">Get Details</a>
  </div>
</div> 
    <?php
}
?>





<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Profile Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$str=$_SESSION["username"];
$res=mysqli_query($conn,"select * from customer where name='$str'");
if(($rows=mysqli_fetch_array($res)))
    {
        ?>
        <table class="table">
  <thead>
    
  </thead>
  <tbody>
   <tr>
       <td>Email</td>
       <td><?php echo$rows[0];?></td>
   </tr>
    <tr>
       <td>Name</td>
       <td><?php echo$rows[4];?></td>
   </tr>
    <tr>
       <td>Address</td>
       <td><?php echo$rows[2];?></td>
   </tr>
    <tr>
       <td>ContactNo</td>
       <td><?php echo$rows[3];?></td>
   </tr>
  </tbody>
</table>
        <?php
        
       
        
    }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Change Your Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="profile.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Old Password</label>
    <input type="password" class="form-control" name="op" aria-describedby="emailHelp" placeholder="Enter old password" required>
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter New Password</label>
    <input type="password" name="np" class="form-control" id="exampleInputPassword1" placeholder="Enter new Password" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit" name="z">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<! navbar closing>

<?php
if(isset($_REQUEST["z"]))
{
       $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
    $k1=$_REQUEST["np"];
    $k2=$_REQUEST["op"];
    mysqli_query($conn,"update  customer set password='$k1' where password='$k2'");
    ?>
    <script>alert("PASSWORD CHANGED SUCCESSFULLY!!!");</script>
    <?php

}
?>
<?php
if(isset($_REQUEST["q"]))
{
    $p1=$_REQUEST["n"];
    $p2=$_REQUEST["e"];
    $p3=$_REQUEST["m"];
    date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
  
    $p5=$_REQUEST["s"];
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    mysqli_query($conn,"insert into query values('$p1','$p2','$p3','$date','$p5')");
    ?>
    <script>alert("Query Send  Successfully!!!");</script>
    <?php
    
    
    
}
?>

<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D6C4B0 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Admin Response</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$str=$_SESSION["email"];
$res=mysqli_query($conn,"select * from response where email='$str'");
if(($rows=mysqli_fetch_array($res)))
    {
       ?>
       <p>Question:<?php echo$rows[1]; ?></p>
        <p>Answer:<?php echo$rows[2]; ?></p>
       <?php
        
       
        
    }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>