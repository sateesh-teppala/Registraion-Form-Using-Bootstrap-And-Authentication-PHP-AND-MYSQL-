<?php

$ser="localhost";
$user="root";
$pass="";
$db="project1";
$conn = mysqli_connect($ser,$user,$pass,$db);

?>
<?php
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $user=$_POST['user'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $pass=$_POST['pass'];

    $query = "INSERT INTO new (fname,lname,user,email,gender,pass) VALUES ('$fname','$lname','$user','$email','$gender','$pass')";
    $result=mysqli_query($conn,$query);
    if($result > 0)
    {
        echo "Data Successfully Inserted";
        //header("Location: Destination or homepage.html");
        //remove above comment(//) if you want to redirect to another page
    }
    else{
        echo "Data Not Inserted";
    }
    mysqli_close($conn);

}


?>