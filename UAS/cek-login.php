<?php
    include("connection.php");
    $username = "";
    $password = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST['username'];
        $pass = md5($_POST['password']);

        if (!empty($username) && !empty($password)) {
            $sql = "SELECT * FROM users WHERE (username='$username' AND password='$password')";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['username']=$row['username'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['nama']=$row['nama'];
                    header('Location: index.php');
                }
            } else {
                echo "<script>alert('Oops! Username atau Password tidak sesuai')</script>";
                header('Location: login.php');
            }
        }
    }
?>    
