<?php
    require_once ('../mail.php');
    if(isset($_POST['name'])&&isset($_POST['mail'])&&isset($_POST['mess'])){
        $name=$_POST['name'].' '.$_POST['mail'];
        $mess=$_POST['mess'];
        $contact="huyphan21092002@gmail.com";
        $title="Liên hệ từ khách hàng";
        sendmail($contact,$name,$title,$mess);
        echo '<script>alert("Gửi thành công vui lòng chờ đợi phản hồi");</script>';
        echo '<script>window.location.href = "../contact.php";</script>';
    }else{
        echo '<script>alert("Vui lòng điền đầy đủ thông tin!");</script>';
        echo '<script>window.location.href = "../contact.php";</script>';
    }
?>
