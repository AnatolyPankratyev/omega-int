<section class="main-block bg-light">
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-lg-5 col-xl-6 d-flex align-items-center">
                <div class="mb-5 mt-11">
                    <h1 class="mb-3">OMEGA Интерьер</h1>
                    <p class="lead">Покраска изделий из МДФ, МАССИВА и других материалов</p>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="" data-toggle="modal" data-target="#modal-callback">Оставить заявку</a></div>
            </div>
            <!-- End Content -->
            <!-- SVG Shape -->
            <figure class="col-lg-7 col-xl-6">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
                    <path fill="#F9FBFF" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
              c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z"></path>
                    <defs>
                        <path id="mainHeroSVG1" d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z"></path>
                    </defs>
                    <clipPath id="mainHeroSVG2">
                        <use xlink:href="#mainHeroSVG1"></use>
                    </clipPath>
                    <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
                        <image width="750" height="750" href="img/bg-main.png" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
                    </g>
                </svg>
            </figure>
            <!-- End SVG Shape -->
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <h1>Услуги</h1>
        <?php if ($services): ?>
            <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6 mt-5">
                    <a href="service/<?=$service->alias;?>">
                        <div class="service-item" style="background-image: url('img/<?=$service->img;?>')">
                            <div class="item-body">
                                <h4><?=$service->title;?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            </div>
        <? else: ?>
        <h5>Раздел не заполнен, но скоро появится информация</h5>
        <?php endif; ?>
        <h1 class="mt-5 pt-5">Готовые изделия</h1>
        <?php if ($products): ?>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <a href="<?=$product->alias;?>">
                            <div class="service-item" style="background-image: url('img/<?=$product->img;?>')">
                                <div class="item-body">
                                    <h4><?=$product->title;?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <? else: ?>
            <h5>Раздел не заполнен, но скоро появится информация</h5>
        <?php endif; ?>
    </div>
</section>
<!--<section class="color-cat">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <h4>Покраска в любой цвет по каталогам</h4>-->
<!--                <h4><span>RAL, NCS, PANTONE, WCP</span></h4>-->
<!--                <hr>-->
<!--                <p>Мы можем заколеровать краску под Ваш образец, если в палитрах не нашлось подходящего цвета.</p>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="opp-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1><span>OMEGA Интерьер</span></h1>
                <h3>Ваш лучший выбор</h3>
                <div class="fourth-content">
                    <p>Наша компания оказывает широкий спектр услуг по покраске изделий из дерева ПВХ, алюминия и других материалов. На высоком качественном уровне с использованием прогрессивных технологий и материалов мы выполним покраску любого вашего изделия.</p>
                    <h5>Только у нас:</h5>
                    <ul>
                        <li>Удобное расположение</li>
                        <li>Круглосуточный доступ</li>
                        <li>команда опытных профессионалов</li>
                        <li>новейшее оборудование</li>
                        <li>инновационные технологии</li>
                        <li>надежные поставщики материалов</li>
                        <li>любые объемы и сложность работ</li>
                        <li>оптимальное соотношение цена-качество</li>
                        <li>желание работать и решать насущные проблемы наших клиентов</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="opp-img"></div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form">
    <a name="contact"></a>
    <div class="container">
        <h2>Рассчитайте стоимость работ (покраска)</h2>
        <p class="text-center">Опишите, что именно вас интересует. Мы бесплатно проведем оценку стоимости работ и сообщим вам по телефону.</p>
        <form action="main/send" class="needs-validation mt-5" method="post" novalidate>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Ваше имя*</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите имя
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tel">Ваш номер телефона*</label>
                        <input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите номер телефона (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите телефон
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="form-group">
                <label for="email">Ваш email*</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Введите email (обязательно)" required>
                <div class="invalid-feedback">
                    Введите email
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="type_product">Выберите тип изделия</label>
                        <select name="type_product" id="type_product" class="form-control">
                            <option value="">Выберите тип (необязательно)</option>
                            <option value="1">Изделие из МДФ</option>
                            <option value="2">Массив дерева</option>
                            <option value="3">Шпон</option>
                            <option value="4">Дверной блок</option>
                            <option value="5">Оконный блок</option>
                            <option value="6">Столешница</option>
                            <option value="7">Подоконник</option>
                            <option value="8">Паркетная доска</option>
                            <option value="9">Жалюзийная дверца</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type_cover" class="mb-0">Выберите тип покрытия</label>
                        <p class="p-typeCover">В данном списке представлены не все варианты покрытия<br>Подробности необходимо обсуждать с менеджером*</p>
                        <select name="type_cover" id="type_cover" class="form-control">
                            <option value="">Выберите тип (необязательно)</option>
                            <option value="1">Матовая эмаль</option>
                            <option value="2">Полуматовая эмаль</option>
                            <option value="3">Глянцевая эмаль</option>
                            <option value="4">Высокий глянец (полировка)</option>
                            <option value="5">Высокий глянец и лак (полировка)</option>
                            <option value="6">Лак</option>
                            <option value="7">Масло</option>
                            <option value="8">Заливка смолой</option>
                            <option value="9">Масло с твердым воском</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sqm">Количество кв.м.</label>
                        <input name="sqm" type="number" class="form-control" id="sqm" placeholder="Введите количество кв.м. (необязательно)">
                    </div>
                    <div class="form-group">
                        <label for="note">Дополнительная информация</label>
                        <textarea name="note" id="note" cols="30" rows="5" class="form-control" placeholder="Введите дополнительную информацию (необязательно)"></textarea>
                    </div>
                </div>
                <div class="col-lg-6 right-form">
                    <label class="font-weight-bold">Требуемые дополнительные работы (необязательно)</label>
                    <div class="form-check">
                        <input name="adv1" class="form-check-input" type="checkbox" id="adv1" value="1">
                        <label class="form-check-label" for="adv1">
                            упаковка
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="adv2" class="form-check-input" type="checkbox" id="adv2">
                        <label class="form-check-label" for="adv2">
                            шпаклевка
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="adv3" class="form-check-input" type="checkbox" id="adv3">
                        <label class="form-check-label" for="adv3">
                            удаление сколов
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="adv4" class="form-check-input" type="checkbox" id="adv4">
                        <label class="form-check-label" for="adv4">
                            удаление старого покрытия
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="adv5" class="form-check-input" type="checkbox" id="adv5">
                        <label class="form-check-label" for="adv5">
                            разборка/сборка изделий
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="adv6" class="form-check-input" type="checkbox" id="adv6">
                        <label class="form-check-label" for="adv6">
                            снятие фурнитуры
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="adv7" class="form-check-input" type="checkbox" id="adv7">
                        <label class="form-check-label" for="adv7">
                            подбор цвета по образцу
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-block" type="submit">Получить расчет</button>
            <p class="mt-2">*нажимая кнопку, вы даете согласие на обработку персональных данных</p>
        </form>
    </div>
</section>