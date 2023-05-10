<?php
    include ("..\connection-function\config.php");

    if(isset($_POST['submit'])){
        $NIP = $_POST['nip'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        
        // Validasi NIP
        $check_NIP_sql = "SELECT * FROM login_pegawai WHERE id='$NIP'";
        $check_NIP_result = mysqli_query($db, $check_NIP_sql);

        if($check_NIP_result->num_rows > 0){
            header('Location: ..\..\Form\form-login.php?status=g006');
            die();
        }else{
            // Validasi Password
            if($password == $cpassword){
                
                // Validasi Email
                $sql = "SELECT * FROM login_pegawai WHERE username='$username'";
                $result = mysqli_query($db, $sql);

                if(!$result->num_rows > 0){
                    $sql = "INSERT INTO login_pegawai (id, username, email, password) VALUES ('$NIP','$username','$email','$password')";
                    $result = mysqli_query($db, $sql);

                    // Validasi Input
                    if($result){
                        header('Location: ..\..\Form\form-login.php?status=sukses');
                        die();
                    }else{
                        header('Location: ..\..\Form\form-register.php?status=g001');
                        die();
                    }
                }else{
                    header('Location: ..\..\Form\form-register.php?status=g002');
                    die();
                }

            }else{
                header('Location: ..\..\Form\form-register.php?status=g003');
                die();
            }
        }
    }
?>