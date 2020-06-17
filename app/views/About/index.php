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