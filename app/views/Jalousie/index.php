<section class="jalousie-section">
    <div class="container">
        <h1>Жалюзийные дверцы с отделкой</h1>
        <div class="row">
            <div class="col-md-6">
                <?php if($jalousie): ?>
                    <?php foreach($jalousie as $item): ?>
                        <div class="product-img-gallery">
                            <img src="img/<?=$item->path;?>" alt="<?=$item->path;?>">
                        </div>
                        <?php break;?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <h4>Жалюзийные дверцы</h4>
                <form action="main/sendjalousie" class="needs-validation mt-3" method="post" novalidate>
                    <div class="form-group">
                        <label for="name">Ваше имя*</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите имя
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel">Ваш номер телефона*</label>
                        <input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите номер телефона (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите телефон
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Ваш email*</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Введите email (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите email
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="size">Размеры</label>
                        <select name="size" id="size" class="form-control">
                            <option value="standart">Стандартные размеры</option>
                            <option value="unstandart">Нестандартные размеры</option>
                        </select>
                    </div>
                    <div class="size-standart-block">
                        <?php if ($prices): ?>
                            <div class="form-group">
                                <label for="prices">Ширина</label>
                                <select name="prices" id="prices" class="form-control">
                                    <?php foreach ($prices as $price): ?>
                                        <option value="<?=$price->id;?>" data-price="<?=$price->price;?>"><?=$price->height;?> мм x <?=$price->width;?> мм</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php endif; ?>
                        <h5 class="jalousie-price-standart">136 руб./шт</h5>
                    </div>
                    <div class="size-unstandart-block cust-hide">
                        <div class="form-group">
                            <label for="width_u">Ширина</label>
                            <input name="width_u" type="number" id="width_u" class="form-control" placeholder="Введите ширину(в сантиметрах)">
                        </div>
                        <div class="form-group">
                            <label for="height_u">Высота</label>
                            <input name="height_u" type="number" id="height_u" class="form-control" placeholder="Введите высоту(в сантиметрах)">
                        </div>
                        <button class="btn btn-secondary but-unstandart">Посчитать</button>
                        <h5 class="jalousie-price-unstandart mt-4" data-pricesqm="<?=$sq_m_price->price;?>">0 руб./шт (<?=$sq_m_price->price;?>руб./кв.м.)</h5>
                    </div>
                    <button class="btn btn-block btn-success mt-4" type="submit">Оставить заявку</button>
                    <p class="mt-2">*нажимая кнопку, вы даете согласие на обработку персональных данных</p>
                </form>
            </div>
        </div>
        <div class="decor">
            <h3>Виды отделки</h3>
            <ul class="list-group">
                <li class="list-group-item">тонировка плюс лак</li>
                <li class="list-group-item">эмаль в цвет ral или ncs</li>
                <li class="list-group-item">масло c твердым воском</li>
                <li class="list-group-item">подбор цвета по образцу</li>
            </ul>
            <div class="morilki">
                <h3>Виды морилок</h3>
                <div class="row">
                    <?php for ($i = 1; $i <= 17; $i++): ?>
                    <div class="col-md-3 col-6">
                        <div class="img-block">
                            <img src="img/morilki/<?=$i;?>.png" alt="<?=$i;?>">
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>