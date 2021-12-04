<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật thông tin</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'profile/save-update-profile' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <input type="hidden" value="<?= $_GET['profile_id'] ?>" name="profile_id">
                        <!-- <?php if ($detail_pro['image_profile'] != "") : ?>
                            <div>
                                <img style="width:120px; heigh:100px" src="<?= ADMIN . $detail_pro['image_product'] ?>" alt="">
                            </div>
                        <?php endif ?> -->
                        <br>
                        <!-- <div class="form-group">
                            <label for="">Tên danh mục: </label>
                            <select name="subcategory_id" id="" style="outline:none; width: 200px; border: 1px solid #AAAAAA; border-radius: 5px; margin-left: 10px; padding-left: 10px;">
                                <?php foreach ($subcate as $index => $l) : ?>
                                    <option value="<?= $l['subcategory_id'] ?>" <?php if ($l['subcategory_id'] == $_GET['subcategory_id']) echo 'selected'; ?>><?= $l['name_subcategory'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="">Tên công ty: </label>
                            <input type="text" value="<?= $detail_pro['name_profile'] ?>" name="name_profile" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại: </label>
                            <input type="number" value="<?= $detail_pro['tel'] ?>" name="tel" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ: </label>
                            <textarea class="form-control" name="sub_decription" id="box_text" cols="50" rows="3"><?= $detail_pro['sub_decription'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" value="<?= $detail_user['email'] ?>" name="email" disabled class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">map</label>
                            <input type="text" value="<?= $detail_user['map'] ?>" name="map" disabled class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'profile' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button name="update-profile" type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>