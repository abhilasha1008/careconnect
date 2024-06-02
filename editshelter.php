<?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you're passing the organization email through POST parameter 'email'
    $org_email = $_POST["email"];

    // Assuming you're also passing the organization name, email, etc. through POST parameters
    // Make sure to sanitize and validate user inputs to prevent SQL injection
    $new_name = mysqli_real_escape_string($conn, $_POST['name']);
    $new_email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $new_address = mysqli_real_escape_string($conn, $_POST['address']);
    $new_workarea = mysqli_real_escape_string($conn, $_POST['workarea']);
    // Add more fields as needed

    // Update the organization information
    $query = "UPDATE org SET name='$new_name', email='$new_email', contact='$new_contact', address='$new_address', workarea='$new_workarea' WHERE email='$org_email'";
    $res = mysqli_query($conn, $query);

    // Check if the update was successful
    if($res) {
        echo "Organization information updated successfully.";
    } else {
        echo "Error updating organization information: " . mysqli_error($conn);
    }

    // Redirect back to the admin.php page
    header("location: admin.php");
} else {
    // If the request method is not POST, redirect back to admin.php
    header("location: admin.php");
}
?>
