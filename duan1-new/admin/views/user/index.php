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
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th style="width: 30%;">Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Vai trò</th>
                        <th>Hành động</th>
                    </thead>
                    <tbody>
                        <?php foreach ($user_index as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['fullname'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['address'] ?></td>
                                <td><?php
                                    if ($item['contract_number'] > 0) {
                                        echo "0" . $item['contract_number'];
                                    } else {
                                        echo "";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($item['role'] == 1) {
                                        echo "Admin";
                                    } else {
                                        echo "Khách hàng";
                                    }
                                    ?></td>
                                <td>
                                    <?php
                                    if ($item['role'] == 1) {
                                        echo "<a name='update-user' href='" . ADMIN_URL . "user/update-user?user_id=" . $item['user_id'] . '&role=' . $item['role'] . "' class='btn btn-sm btn-info'>
                                        <i class='fas fa-edit'></i>
                                    </a>";
                                    }

                                    ?>
                                    <a href="javascript:;" onclick="confirm_lock('<?= ADMIN_URL . 'user/lock_user?user_id=' . $item['user_id'] ?>', '<?= $item['email'] ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-lock"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>