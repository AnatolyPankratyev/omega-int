<div class="row pt-4">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?=$product->title;?></h3>
            </div>
            <div class="card-body">
                <form action="<?=ADMIN;?>/doors-pine/edit" method="post" role="form">
                    <div class="form-group">
                        <label for="title">Наименование товара</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?=h($product->title);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="material">Материал</label>
                        <input type="text" name="material" class="form-control" id="material" placeholder="Материал" value="<?=h($product->material);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_1">Цена с сучками</label>
                        <input type="number" name="price_1" class="form-control" id="price_1" placeholder="Цена с сучками" value="<?=h($product->price_1);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_2">Цена без сучков</label>
                        <input type="number" name="price_2" class="form-control" id="price_2" placeholder="Цена без сучков" value="<?=h($product->price_2);?>" required>
                    </div>


                    <div class="form-group">
                        <label for="price_korobka">Цена коробка</label>
                        <input type="number" name="price_korobka" class="form-control" id="price_korobka" placeholder="Цена коробка" value="<?=h($product->price_korobka);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_nalich">Цена наличники</label>
                        <input type="number" name="price_nalich" class="form-control" id="price_nalich" placeholder="Цена наличники" value="<?=h($product->price_nalich);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_dobor">Цена добор</label>
                        <input type="number" name="price_dobor" class="form-control" id="price_dobor" placeholder="Цена добор" value="<?=h($product->price_dobor);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_karniz">Цена карниз</label>
                        <input type="number" name="price_karniz" class="form-control" id="price_karniz" placeholder="Цена карниз" value="<?=h($product->price_karniz);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_sapog">Цена сапожок</label>
                        <input type="number" name="price_sapog" class="form-control" id="price_sapog" placeholder="Цена сапожок" value="<?=h($product->price_sapog);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price_rozetka">Цена розетка</label>
                        <input type="number" name="price_rozetka" class="form-control" id="price_rozetka" placeholder="Цена розетка" value="<?=h($product->price_rozetka);?>" required>
                    </div>

                    <div class="form-group">
                        <label for="max_size">Максимальный размер</label>
                        <input type="text" name="max_size" class="form-control" id="max_size" placeholder="Максимальный размер" value="<?=h($product->max_size);?>" required>
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