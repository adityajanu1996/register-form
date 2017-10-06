<?php
         $dbhost = '127.0.0.1';
         $dbuser = 'user1';
         $dbpass = 'password';
         $dbname='users';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }



         $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
         $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
         $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
         $dob = mysqli_real_escape_string($conn,$_REQUEST['dob']);
         $password = mysqli_real_escape_string($conn,$_REQUEST['password']);
         $mobileno = mysqli_real_escape_string($conn,$_REQUEST['mobileno']);
// attempt insert query execution
$sql = "INSERT INTO registrations (fname,lname, email,dob,password,mobileno) VALUES ('$fname', '$lname', '$email','$dob','$password','$mobileno')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// close connection
         mysqli_close($conn);
      ?>
