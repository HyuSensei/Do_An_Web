<?php

    session_start();

    require_once('../db/config.php');

    if(isset($_POST['login'])){
        if(!empty(trim($_POST['email']))&&!empty(trim($_POST['password']))){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql="SELECT * FROM custumers WHERE email='$email' AND password='$password'";
            $query=mysqli_query($connect,$sql);
            if(mysqli_num_rows($query)>0){
                $row=mysqli_fetch_assoc($query);
                if($row['verify_status']=='1'){
                    $_SESSION['id']=$row['id'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['phone_number']=$row['phone_number'];
                    $_SESSION['address']=$row['address'];
                    $_SESSION['status']="Đăng nhập thành công!";
                    header('location:../index.php');
                    exit(0);
                }else{
                    $_SESSION['status']="Vui lòng xác thực email đã đăng ký";
                    header('location:../login.php');
                    exit(0);
                }

            }else{
                $_SESSION['status']="Kiểm tra lại thông tin đăng nhập";
                header('location:../login.php');
                exit(0);
            }
        }
    }else{
        $_SESSION['status']="Vui lòng điền thông tin đăng nhập";
        header('location:../login.php');
        exit(0);
    }
    mysqli_close($connect);
?>
