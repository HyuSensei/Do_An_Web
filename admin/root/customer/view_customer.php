<?php
require_once('./data/connnect.php');
$sql = "select * from custumers";
$result = mysqli_query($connect, $sql);
?>

<a href="./customer/create.php" style="float: right; background-color: e28585;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>email</th>
                <th>phone_number</th>
                <th>phone_number</th>
                <th>phone_number</th>
                <th>Xem</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>
                    <td>
                        <p><?php echo $value['id'] ?></p>
                    </td>
                    <td>
                        <p style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['name'] ?></p>
                    </td>
                    <td>
                        <p style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['name'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['phone_number'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['address'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['password'] ?></p>
                    </td>
                    <td>
                        <a href="./customer/view.php?id=<?php echo $value['id'] ?>"><span class="fa fa-eye" style="color: #e28585;"></span></a>
                    </td>
                    <td>
                        <a href="./customer/edit.php?id=<?php echo $value['id'] ?>"><span class="material-icons" style="color: #e28585;">edit</span></a>
                    </td>
                    <td>
                        <!-- <a href="./product/delete.php?id=<?php echo $value['id'] ?>"><span class="fa fa-trash" style="color: #e28585;"></span></a> -->
                        <form action="./customer/code_customer.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
>
