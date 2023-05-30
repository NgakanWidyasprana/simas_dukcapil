<?php
    include("config.php");

    session_start();
    if(!isset($_SESSION['username'])){
        header ('Location: ..\..\src\authentication.php?status=009');
        die();
    }else{
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM level_users WHERE username='$username'";
        $result = mysqli_query($db, $sql);

        // Check Data is Still Exist or Not
        if($result->num_rows > 0){
            $data = mysqli_fetch_assoc($result);
            $_SESSION['users'] = $data['Nama User'];
            $_SESSION['status'] = $data['Status Users'];
        }else{
            header ('Location: ..\..\src\authentication.php?status==010');
            die(); 
        }
    }
    // header("Location: Form/form-login.php?status=g007");
?> 