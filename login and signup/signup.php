<?php
session_start();

require_once('config2.php');


$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['password-repeat'];
$email = trim($email);
$password = trim($password);


$error = 0;

if (!isset($_POST["submit"])) {
    $error = +1;
    echo "<script>
window.location.href='signForm.php';
</script>";

    exit();
}

if($password !== $passwordRepeat) {
    $error = +1;
    echo "<script>
   alert('ensure both password inputs are the same');
window.location.href='signForm.php';
</script>";

}

if($password === '') {
    $error = +1;
    echo "<script>
     alert('enter a password ');
window.location.href='signForm.php';
</script>";
}

if($email === '' ){
    $error = +1;
    echo "<script>
     alert('enter a email ');
window.location.href='signForm.php';
</script>";
}



if ($error === 0) {
    $sqltest = "SELECT `userName` FROM `user` WHERE userName = ? limit 1";


    $user3 = "INSERT INTO `user`( `userName`, `userPassword`) VALUES (?, MD5(?))";



    $stmt = $con->prepare($sqltest);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum == 0) {

        $stmt = $con->prepare($user3);
        $stmt->bind_param("ss", $email, $password); 
        $stmt->execute();

        echo "<script>
     alert('sign up successful');
window.location.href='index.php';
</script>";

    } else {
        echo "<script>
     alert('email is already registerd ');
window.location.href='signForm.php'
</script>";
    }

    $stmt->close();
    $con->close(); // ends the script
}



?>
