<?php

if(isset($_POST['submit'])){

    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['account-type'];

    $sql ="INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`, `account_type`, `phone`) VALUES ('$fname','$lname','$email','$password','$role','$phone')";
    $result = mysqli_query($conn,$sql);

    if($result){
    echo "<script>alert('Account Created Successfully')</script>";
    }
    else{
    echo "<script>alert('Account Creation Failed')</script>";
    }
}
?>