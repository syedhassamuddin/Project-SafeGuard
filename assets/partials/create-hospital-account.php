<form action="assets/partials/create-hospital-account.php" method="post">
    <div class="row">
        <div class="col-12">
        <div class="form-group">
            <label>Hospital Name</label>
            <input type="text" class="form-control" name="name" placeholder="Civil Hospital" >
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 pr-md-1">
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="example@example.com" >
        </div>
        </div>
        <div class="col-md-6 pl-md-1">
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" placeholder="Enter Password" >
        </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" name="hospital-create" class="btn btn-fill btn-primary">Create Account</button>
    </div>
</form>

<?php
// require "assets/php-scripts/conn.php";
if(isset($_POST["hospital-create"])){
    echo "button pressed";
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pass  = $_POST['password'];


// $sql ="INSERT INTO `hospitals`(`hostpital_name`, `hospital_email`, `hospital_password`) VALUES ('$name','$email','$pass')";
// $result= mysqli_query($conn,$sql);

// if($result){
//     echo "<script>alert('Account Created Successfully')</script>";
//     }
//     else{
//     echo "<script>alert('Account Creation Failed')</script>";
//     }
}


?>