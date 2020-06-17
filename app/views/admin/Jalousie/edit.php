<div class="row pt-4">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?=$product->title;?></h3>
            </div>
            <div class="card-body">
                <form action="<?=ADMIN;?>/jalousie/edit" method="post" role="form">
                    <div class="form-group">
                        <label for="height">Высота</label>
                        <input type="number" name="height" class="form-control" id="height" placeholder="Высота" value="<?=h($product->height);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="width">Ширина</label>
                        <input type="number" name="width" class="form-control" id="width" placeholder="Ширина" value="<?=h($product->width);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Цена" value="<?=h($product->price);?>" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Статус</label>
                        <input type="number" name="status" class="form-control" id="status" placeholder="Статус" value="<?=h($product->status);?>" required>
                    </div>

                    <input type="hidden" name="id" value="<?=$product->id;?>">
                    <button type="submit" class="btn btn-success">Сохранить</button>

                </form>
            </div>
        </div>
    </div>
</div>