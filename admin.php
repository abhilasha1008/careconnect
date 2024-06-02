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
    
    <a class="navbar-brand" data-toggle="modal" data-target="#exampleModal">Welcome :Admin </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
 
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       
        <li class="nav-item active">
         <a class="nav-link" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">User Query <span class="sr-only">(current)</span>
         </a> 
         </li>
      
      
      <li class="nav-item active">
        <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">List of all User's <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
          <a class="nav-link" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">List of Organization <span class="sr-only">(current)</span></a>
         
	  </li>
      <li class="nav-item active">
          <a class="nav-link" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">List of all Donars <span class="sr-only">(current)</span></a>
         
	  </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>






<center>
<div class="collapse" id="collapseExample3">
    <div class="card w-50" style="width:1000px !important" >
        <div class="card" >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;">User Query</h5>
            <div class="card card-body">
                <form action="profile.php">
                <?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from query");
?>
   
                        <div class="table-responsive" >
  <table class="table">
     <tr>
    <th>User Name</th>
    <th>User E-mail</th>
    <th>Query Content</th>
    <th>Sent Date & Time</th>
    <th>Query Type</th>
    </tr>

<?php
while(($rows=mysqli_fetch_array($res)))
{
                    
                    ?>
 
 <tr>
     <td><?php echo$rows[0]; ?></td>
     <td><?php echo$rows[1]; ?></td>
     <td><?php echo$rows[2]; $que=$rows[2];?></td>
     <td><?php echo$rows[3]; ?></td>
      <td><?php echo$rows[4]; ?></td>
      <td><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Response</a></td>
      
     
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
<div class="collapse" id="collapseExample">
        <div class="card w-50" style="width:900px !important" >
        <div class="card" >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;"> List of all User's</h5>
            <div class="card card-body">
                <form action="profile.php">
                <?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from customer");
?>
   
                        <div class="table-responsive">
  <table class="table">
      <tr>
     <th>Name</th>
     <th>Email id</th>
     <th>Address</th>
     <th>Contact No</th>
     <th> Action </th>
 </tr>
 </thead>
<?php
while(($rows=mysqli_fetch_array($res)))
{
                    
                    ?>
                    <thead>
 
 <tbody>
 <tr>
     <td><?php echo$rows[4]; ?></td>
     <td><?php echo$rows[0]; ?></td>
     <td><?php echo$rows[2]; ?></td>
     <td><?php echo$rows[3]; ?></td>
     <td><a  href="delete.php?id=<?php echo$rows[0]; ?>" class="btn btn-link">Delete</a> </td>
      
      
     
 </tr>
 </tbody>
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
<div class="collapse" id="collapseExample4">
    <div class="card w-50" style="width: 1000px !important" >
        <div class="card"  >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;">List of Shelters </h5>
            <div class="card card-body">
                <form action="admin.php">
                <?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from org");
?>
   
                        <div class="table-responsive" >
  <table class="table">
       <tr>
          <th colspan="2" class="text-center">Shelters</th>
          <th>E-mail id</th>
          <th>Contact No </th>
          <th> Address</th>
          <th>Shelter Type</th>
          <th> Action</th>
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
     <td><?php echo$rows[4]; ?></td>
     <td><a  href="deleteshelter.php?id=<?php echo$rows[1]; ?>" class="btn btn-link">Delete</a> </td>
     
     
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
<div class="collapse" id="collapseExample5">
    <div class="card w-50" style="width: 1350px !important" >
        <div class="card"  >
            <h5 class="card-header" style="background-color:#D6C4B0 !important;">List of all donars </h5>
            <div class="card card-body">
                <form action="profile.php">
                <?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$res=mysqli_query($conn,"select * from Donation");
?>
   
                        <div class="table-responsive" >
  <table class="table">
       <tr>
          <th>Donar Name</th>
          <th>E-mail id</th>
          <th> Address</th>
          <th>Contact No </th>
          <th>Recipient Organization: </th>
          <th>Donated Amounts (₹)</th>
          <th colspan="3" class="text-center">Donated Items</th>
      </tr>
<?php
while(($rows=mysqli_fetch_array($res)))
{
                    
                    ?>
 
 <tr>
     
     <td><?php echo$rows[0]; ?></td>
     <td><?php echo$rows[1]; ?></td>
     <td><?php echo$rows[2]; ?></td>
     <td><?php echo$rows[3]; ?></td>
     <td><?php echo$rows[8]; ?></td>
     <td><?php echo$rows[4]; ?></td>
     <td><img src="upload/<?php echo$rows[5]; ?>" style="height:100px;width:120px;"></td>
     <td><img src="upload/<?php echo$rows[6]; ?>" style="height:100px;width:120px;"></td>
     <td><img src="upload/<?php echo$rows[7]; ?>" style="height:100px;width:120px;"></td>
     
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





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Response</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="admin.php">
  <div class="form-group">
    <label for="exampleInputEmail1">User E-mail id</label>
    <input type="email" class="form-control"  name="e" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Message</label>
    <input type="text" name="a" class="form-control" id="exampleInputPassword1" placeholder="Response to query" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit" name="x">
</form>
      </div>
      
    </div>
  </div>
</div>
<?php
if(isset($_REQUEST["x"]))
{
    $p1=$_REQUEST["e"];
   
    $p2=$_REQUEST["a"];
   
    $conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
    mysqli_select_db($conn,"id21833050_project23");
    mysqli_query($conn,"insert into response values('$p1','$que','$p2')");
    ?>
    <script>alert("SEND!!!");</script>
    <?php
    
    
    
}
?>





<div class="card-deck d-flex justify-content-center" >
 <div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="admin1.png" width="180px" height="250px" alt="Card image cap">
    <div class="card-body" >
      <h5 class="card-title">Total Users: <?php
                        $conn = mysqli_connect("localhost", "id21833050_projectkit", "Project@1234");
                        mysqli_select_db($conn, "id21833050_project23");
                        $count_query = mysqli_query($conn, "SELECT COUNT(*) FROM customer");
                        $count = mysqli_fetch_array($count_query)[0];
                        echo $count;
                        ?></h5>
    </div>
  </div>
  
 
   <div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="admin4.jpg" width="180px" height="250px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" >Total Donars: <?php
                        $conn = mysqli_connect("localhost", "id21833050_projectkit", "Project@1234");
                        mysqli_select_db($conn, "id21833050_project23");
                        $count_query = mysqli_query($conn, "SELECT COUNT(*) FROM Donation");
                        $count = mysqli_fetch_array($count_query)[0];
                        echo $count;
                        ?></h5>
    </div>
  </div>
  
</div>

<div class="card-deck d-flex justify-content-center" >
<div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="admin2.jpg" width="180px" height="250px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Total Orphange : <?php
                        $conn = mysqli_connect("localhost", "id21833050_projectkit", "Project@1234");
                        mysqli_select_db($conn, "id21833050_project23");
                        $count_query = mysqli_query($conn, "SELECT COUNT(*) FROM org where workarea='orphange' ");
                        $count = mysqli_fetch_array($count_query)[0];
                        echo $count;
                        ?></h5>
    </div>
  </div>
  
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem; ">
    <img class="card-img-top" src="admin3.jpg" width="180px" height="250px" alt="Card image cap">
    <div class="card-body"style="max-height: 18rem !important; ">
      <h5 class="card-title">Total Old Age Home: <?php
                        $conn = mysqli_connect("localhost", "id21833050_projectkit", "Project@1234");
                        mysqli_select_db($conn, "id21833050_project23");
                        $count_query = mysqli_query($conn, "SELECT COUNT(*) FROM org where workarea='old age home' ");
                        $count = mysqli_fetch_array($count_query)[0];
                        echo $count;
                        ?></h5>
    </div>
  </div>
  </div>

<div class="position-sticky" style="background-color: #D6C4B0; text-align: center; padding: 20px; color: white;">
    <div>&copy; CareConnect: Holistic Well-being System for Elderly & Orphaned Residents</div>
  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>