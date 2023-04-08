<?php
require_once('./db/config.php');

        if(isset($_SESSION['id'])){
            $id=$_SESSION['id'];
            $sql="SELECT products.id,products.price,products.product_name,products.img_main,order_detail.quantity_order,orders.total_price,order_detail.id_order,order_detail.id_product 
            FROM order_detail,products,orders 
            WHERE products.id=order_detail.id_product AND orders.id=order_detail.id_order AND id_customer='$id'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)>0) {
                $sql_id_customer = "SELECT * FROM orders WHERE id_customer='$id'";
                $result_id_customer = mysqli_query($connect, $sql_id_customer);
                $check_order=0;
                $check_id_product=0;
                    while ($row = mysqli_fetch_assoc($result)){
                        $id_order = $row['id_order'];

                        echo '
                             <div style="margin-bottom: 30px" class="row">
                                <div class="col-3">
                                <img src="' . $row['img_main'] . '" alt="" width="140px">
                            </div>
                            <div class="col-9">
                                <p>' . $row['product_name'] . '</p>
                                <p>x' . $row['quantity_order'] . '</p>
                                <p style="color: #820813 ">' .  number_format($row['price'] , 0, '.', ',') . ' đ</p>
                            </div>
                        </div>';
                        $check_id_product = $row['id_product'];
                                if ($check_id_product ==  mysqli_fetch_assoc(mysqli_query($connect, "SELECT id_product FROM order_detail WHERE id_order = '$id_order' ORDER BY id DESC LIMIT 1"))['id_product']){
                                    echo '
                            <div style="margin-top: 20px;margin-bottom: 30px" class="container-fluid">
                            <div class="row">
                                <div style="font-size: 11px;" class="col-4">Vui lòng bấm đã nhận hàng khi sản phẩm được giao tới
                                    và sản phẩm không vấn đề gì.
                                </div>
                                <div class="col-3">
                                    <p style="color:#820813; ">
                                         Thành tiền: '. number_format($row['total_price'] , 0, '.', ',').' đ
                                    </p>
                                </div>
                                <div class="col-5">
                                    <button style="font-size: 15px;background-color: #820813" type="button" class="btn btn-info">Đã Nhận</button>
                                    <button style="font-size: 15px;margin-left: 10px;background-color: white;color: gray" type="button" class="btn btn-info">Liên Hệ</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                ';
                                }
                            }
                        }

}

mysqli_close($connect);
