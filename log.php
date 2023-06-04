<?php
include 'conn.php';
session_start();
if(isset($_POST['send'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

            if($row['utype'] == '1'){
            if(is_array($row )) {
                $_SESSION["email"] = $row ["email"];
                $_SESSION["password"] =  $row ["password"];
                $id = $row['userID'];
        
            if($email === $_SESSION['email'] && $password === $_SESSION['password']){
                header("Location: admin.php?user=".$id);
                }
            }
        }
    } else {
        ?>
       <script>
            window.alert('Login Error');
            window.location.href='login.php';
        </script>
        <?php
    }
    mysqli_close($conn);
}
?>