<?php
 session_start();
 require_once('../db/config.php');
 require_once('../mail.php');
 $acc_mail=$_SESSION['email'];
 $name_customer=$_SESSION['name'];
 $title="Thông báo của Skinlele";
try{
    if(isset($_SESSION['id'])){
        if(isset($_POST['name'])&&isset($_POST['phone_number'])&&isset($_POST['address'])&&isset($_POST['method'])){
            $name=$_POST['name'];
            $phone_number=$_POST['phone_number'];
            $address=$_POST['address'];
            $id_customer=$_SESSION['id'];
            $method=$_POST['method'];
            if($method=="orderoff"){
                if(isset($_SESSION['cart'])){
                    $cart = $_SESSION['cart'];
                    $total_price = 0;
                    foreach($cart as $each){
	                    $total_price +=  $each['price']*$each['quantity'];
                    }
                    $content="<h2>Bạn vừa đặt 1 đơn hàng từ Skinlele</h2>
                            <h5>$total_price đ</h5>";
                    $order_status = 0;
                    $payment = 'Thanh toán khi nhận hàng';
                    $code_order=rand(100000,999999);
                    $sql = "INSERT INTO orders(id_customer, code_order, phone_customer, order_status, payment, customer_address,total_price)
                    values ('$id_customer', '$code_order', '$phone_number', '$order_status', '$payment','$address','$total_price')";
                    $order_query=mysqli_query($connect,$sql);
                    if($order_query){
                        $sql = "SELECT max(id) FROM orders WHERE id_customer = '$id_customer'";
                        $result = mysqli_query($connect,$sql);
                        $order_id = mysqli_fetch_assoc($result)['max(id)'];
                        foreach($cart as $product_id => $each){
                        $quantity = $each['quantity'];
                        $sql = "INSERT INTO order_detail(id_product,id_order,quantity_order)
                        values('$product_id','$order_id','$quantity')";
                        mysqli_query($connect,$sql);
                        }
                    }
                }
                echo "Đặt hàng thành công!";
                sendmail($acc_mail,$name,$title,$content);
                unset($_SESSION['cart']);
            }else{
                echo "không thanh công";
            }
        }
    }
} catch (Throwable $e) {
    echo $e->getMessage();
}
    mysqli_close($connect);
?>
