<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật gói bảo hành</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'warranty/save-update-warranty' ?>" method="post">
                    <div class="col-6 offset-3">
                    <input type="hidden" value="<?= $_GET['warranty_id'] ?>" name="warranty_id">
                        <div class="form-group">
                            <label for="">Tên gói bảo hành: </label>
                            <input type="text" value="<?= $detail_warr['name_warranty'] ?>" name="name_warranty" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Thời hạn bảo hành (tháng): </label>
                          <input type="number" value="<?= $detail_warr['warranty_w'] ?>" name="warranty_w" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Giá tiền (đồng): </label>
                          <input type="number" name="price" value="<?= $detail_warr['price'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'warranty' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;" >Hủy</a>
                            &nbsp;
                            <button name="update-warranty" type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>