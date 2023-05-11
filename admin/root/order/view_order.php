<?php
require_once('./data/connnect.php');
$sql = "select * from orders";
$result = mysqli_query($connect, $sql);
?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>id_customer</th>
                <th>code_order</th>
                <th>order_status</th>
                <th>date</th>
                <th>payment</th>
                <th>customer_address</th>
                <th>phone_customer</th>
                <th>total_price</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>
                    <td>
                        <p><?php echo $value['id'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['id_customer'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['code_order'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['order_status'] ?></p>
                    </td>
                    <td>
                        <p style="color: #820813;"><?php echo $value['date'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['payment'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['customer_address'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['phone_customer'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['total_price'] ?></p>
                    </td>
                    <td>
                        <a href="./order/edit_order.php?id=<?php echo $value['id'] ?>"><span class="material-icons" style="color: #e28585;">edit</span></a>
                    </td>
                    <td>
                        <!-- <a href="./product/delete.php?id=<?php echo $value['id'] ?>"><span class="fa fa-trash" style="color: #e28585;"></span></a> -->
                        <form action="./order/code_orders.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
>
