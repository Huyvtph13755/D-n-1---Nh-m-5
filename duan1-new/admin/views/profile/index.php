<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Tên công ty</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Bản đồ</th>
                    </thead>
                    <tbody>
                        <?php foreach ($pro as $index => $item) : ?>
                            <tr style="justify-content: center;">
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['name_company'] ?></td>
                                <td><?php
                                    if ($item['tel'] > 0) {
                                        echo "0" . $item['tel'];
                                    } else {
                                        echo "";
                                    }
                                    ?></td>
                                <td><?= $item['address_company'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['map'] ?></td>
                                <td>
                                    <!-- <a href="<?= ADMIN_URL . 'product/detail-product?product_id=' . $item['product_id'] ?> " class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
                                    </a> -->
                                    <a name="update-product" href="<?= ADMIN_URL . 'profile/update-profile?profile_id=' . $item['profile_id'] ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php if ($_SESSION['email']['role'] == 2) {
                                        echo "<a href='javascript:;' onclick='confirm_remove(" . '"' . ADMIN_URL . "profile/del-profile?profile_id=" . $item['profile_id'] .  '"' . "," . '"' . $item['name_company'] . '"' . ")' class='btn btn-sm btn-danger'>
                                        <i class='fas fa-trash'></i>
                                    </a>";
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>