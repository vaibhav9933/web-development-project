<?php

$Con = mysqli_connect('localhost', 'root', '', 'ecommerce');

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    // Remove single quotes around table name 'tbluser'
    $Dup_Email = mysqli_query($Con, "SELECT * FROM tbluser WHERE Email = '$Email'");
    $Dup_username = mysqli_query($Con, "SELECT * FROM tbluser WHERE UserName = '$Name'");

    if (mysqli_num_rows($Dup_Email)) {
        echo "
        <script>
        alert('This Email is already taken');
        window.location.href='register.php';
        </script>
        ";
    }
    if (mysqli_num_rows($Dup_username)) {
        echo "
        <script>
        alert('This username is already taken');
        window.location.href='register.php';
        </script>
        ";
    } else {
        mysqli_query($Con, "INSERT INTO tbluser (UserName, Email, Number, Password) 
            VALUES ('$Name', '$Email', '$Number', '$Password')");
            echo "
            <script>
            alert('Register successfully');
            window.location.href='login.php';
            </script>
            ";
    }
}

?>
