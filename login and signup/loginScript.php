<?php

session_start();

require_once('config2.php');


$email = $_POST['email'];
$email = trim($email);


$password = $_POST['password'];
$password = trim($password);
$password = md5($password);
$error = 0;

if (!isset($_POST["submit"])) {
    $error = +1;
    echo "<script>
window.location.href='login.php';
</script>";
}

if ($error === 0) {
    if (empty($email) || empty($password)) {
        echo "<script>
alert('please input both a email and password');
window.location.href='login.php';
</script>";

    } else {
        $sql = "SELECT * FROM `user` WHERE userName='$email' AND '$password'";
        $query = mysqli_query($con, $sql);
        $res = mysqli_num_rows($query);


        if ($res == 1) {
            echo "<script>                
                    window.location.href='index.php';
                    </script>";

            $_SESSION['logged-in'] = true;
            $_SESSION['email'] = $email;
        } else {
            echo "Invalid Username or Password";
        }
    }
}
?>
