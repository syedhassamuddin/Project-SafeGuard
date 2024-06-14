<?php
    require "conn.php";
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
?>