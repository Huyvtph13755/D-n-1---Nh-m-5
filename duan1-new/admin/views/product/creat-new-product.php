<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'product/save-creat-new-product' ?>" method="post" enctype="multipart/form-data" >
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên danh mục: </label>
                            <select name="subcategory_id" id="" style="outline:none; width: 200px; border: 1px solid #AAAAAA; border-radius: 5px; margin-left: 10px; padding-left: 10px;">
                                <?php foreach ($subcate as $index => $l) : ?>
                                    <option value="<?= $l['subcategory_id'] ?>"><?= $l['name_subcategory'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tên sản phẩm: </label>
                            <input type="text" name="name_product" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh: </label><br>
                            <input type="file" name="image_product">
                        </div>
                        <div class="form-group">
                            <label for="">Thời gian bảo hành (tháng): </label>
                            <input type="number" name="warranty" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Giá (đồng): </label>
                            <input type="number" name="price_default" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả ngắn sản phẩm: </label>
                            <textarea class="form-control" name="sub_decription" id="box_text" cols="50" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả chi tiết sản phẩm: </label>
                            <textarea class="form-control" name="decription" id="box_text" cols="50" rows="6"></textarea>
                        </div>

                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'product' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>