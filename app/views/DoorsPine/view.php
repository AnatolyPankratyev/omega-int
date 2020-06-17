<section class="one-door-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="img/<?=$door->img;?>" alt="<?=$door->alias;?>">
            </div>
            <div class="col-md-9">
                <div class="door-description">
                    <h3 class="mb-0"><?=$door->title;?></h3>
                    <h4><span><?=$door->price_1;?> руб.</span> Дуб сучок</h4>
                    <h4><span><?=$door->price_2;?> руб.</span> Дуб безсучковый</h4>
                    <ul class="list-group mt-4">
                        <li class="list-group-item">
                            <h6>Материал:</h6>
                            <p><?=$door->material;?></p>
                        </li>
                        <li class="list-group-item">
                            <h6>Стандартные размеры:</h6>
                            <p>2000*400, 2000*600, 2000*700, 2000*800, 2000*900</p>
                        </li>
                        <li class="list-group-item">
                            <h6>Изготавливаем двери нестандартных размеров: </h6>
                            <p>Max размер: <?=$door->max_size;?></p>
                        </li>
                        <li class="list-group-item">
                            <h6>Стекло в дверные полотна устанавливается с помощью штапика</h6>
                        </li>
                        <li class="list-group-item">
                            <h6>Изготавливаем двери с притвором</h6>
                        </li>
                        <li class="list-group-item">
                            <h6>Дополнительно:</h6>
                            <div class="add-to-product">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td>Дверная коробка сосна 75*34*2100 мм. с пазом под добор 2,5 шт.</td>
                                        <td><?=$door->price_korobka;?> руб.</td>
                                    </tr>
                                    <tr>
                                        <td>Наличник сосна 80*12*2200 мм. 5 шт.</td>
                                        <td><?=$door->price_nalich;?> руб.</td>
                                    </tr>
                                    <tr>
                                        <td>Добор сосна 100*16*2200 мм. 2,5 шт.</td>
                                        <td><?=$door->price_dobor;?> руб.</td>
                                    </tr>
                                    <tr>
                                        <td>Карниз сосна ( для двери 400/600/700/800 и 900 мм.) 1 шт.</td>
                                        <td><?=$door->price_karniz;?> руб.</td>
                                    </tr>
                                    <tr>
                                        <td>Сапожок сосна 90*200 мм. 1шт.</td>
                                        <td><?=$door->price_sapog;?> руб.</td>
                                    </tr>
                                    <tr>
                                        <td>Розетка сосна 90*90 мм. 1шт.</td>
                                        <td><?=$door->price_rozetka;?> руб.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-success px-5 mt-4" data-toggle="modal" data-target="#modal-callback">Заказать</button>
                </div>
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