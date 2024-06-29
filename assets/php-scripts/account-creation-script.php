<?php
    require "conn.php";
?>

<?php
    if(isset($_POST["patient-create"])){
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pass  = $_POST['password'];

        $result = mysqli_query($conn,"INSERT INTO patients VALUES (NULL, '$Fname', '$Lname', '$age','$gender','$email','$pass')");

        if($result){
            echo "
                    <script>
                        alert('Account Created Successfully');
                        window.location.href = '../../create-account.php';
                    </script>
                ";
            }
            else{
            echo "
                <script>
                    alert('Account Creation Failed');
                    window.location.href = '../../create-account.php';
                </script>
                ";
            }
        }
        else{

        }
    
?>

<?php
    if(isset($_POST["hospital-create"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass  = $_POST['password'];


        $sql ="INSERT INTO `hospitals`(`hostpital_name`, `hospital_email`, `hospital_password`) VALUES ('$name','$email','$pass')";
        $result= mysqli_query($conn,$sql);

        if($result){
            echo "
                    <script>
                        alert('Account Created Successfully');
                        window.location.href = '../../create-account.php';
                    </script>
                ";
            }
            else{
            echo "
                <script>
                    alert('Account Creation Failed');
                    window.location.href = '../../create-account.php';
                </script>
                ";
            }
        }
        else{

        }
    
?>

<?php 
if(isset($_POST["admin-create"])){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];

$result = mysqli_query($conn,"INSERT INTO admins VALUES (NULL, '$fname','$lname','$email','$pass')");

if($result){
    echo "
            <script>
                alert('Account Created Successfully');
                window.location.href = '../../create-account.php';
            </script>
        ";
    }
    else{
    echo "
        <script>
            alert('Account Creation Failed');
            window.location.href = '../../create-account.php';
        </script>
        ";
        var_dump($result);
    }
}
?>