<form action="account-creation-script.php" method="post">
    <div class="row">
        <div class="col-12">
        <div class="form-group">
            <label>Hospital</label>
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
        <button type="submit" name="submit" class="btn btn-fill btn-primary">Create Account</button>
    </div>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $name = $_POST['name'];
    $email = $_POST ['email'];
    $pass = $_POST['password'];

$servername = "localhost";
$username = "root";
$passowrd = ""; 
$database = "safeguarddb";

$conn = mysqli_connect($servername,$username,$passowrd,$database);

if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
}



$sql ="INSERT INTO `hospitals`(`hostpital_name`, `hospital_email`, `hospital_password`) VALUES ('$name','$email','$pass')";
$result= mysqli_query($conn,$sql);


if(!$result){
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
     Error 
  </div>
</div>';
}


}
?>