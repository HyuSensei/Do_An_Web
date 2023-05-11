<?php
require_once('./data/connnect.php');
$sql = "select * from vn_pay";
$result = mysqli_query($connect, $sql);
?>

<a href="./vnpay/create.php" style="float: right; background-color: e28585;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id_vnpay</th>
                <th>code_cart</th>
                <th>vnp_amount</th>
                <th>vnp_bankcode</th>
                <th>vnp_banktranno</th>
                <th>vnp_cardtype</th>
                <th>vnp_orderinfo</th>
                <th>vnp_paydate</th>
                <th>vnp_tmncode</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>
                    <td>
                        <p><?php echo $value['id_vnpay'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['code_cart'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_amount'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_bankcode'] ?>đ</p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_banktranno'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_cardtype'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_orderinfo'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_paydate'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_tmncode'] ?></p>
                    </td>


                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
>
