<div class="row pt-4">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?=$product->title;?></h3>
            </div>
            <div class="card-body">
                <form action="<?=ADMIN;?>/services/edit" method="post" role="form">
                    <div class="form-group">
                        <label for="title">Наименование</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?=h($product->title);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="service_id">ID Услуги</label>
                        <input type="number" name="service_id" class="form-control" id="service_id" placeholder="ID Услуги" value="<?=h($product->service_id);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="measurement">Единицы измерения</label>
                        <input type="text" name="measurement" class="form-control" id="measurement" placeholder="Единицы измерения" value="<?=h($product->measurement);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Цена с сучками" value="<?=h($product->price);?>" required>
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