<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?=$this->getMeta();?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="scss/style.css" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
$services = \project\App::$app->getProperty('services');
$products = \project\App::$app->getProperty('products');
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/logo.png"alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=PATH;?>">Главная</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="nav-services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Услуги
                        </a>
                        <div class="dropdown-menu" aria-labelledby="nav-services">
                            <?php if ($services): ?>
                                <?php foreach ($services as $service): ?>
                                    <a class="dropdown-item" href="service/<?=$service['alias'];?>"><?=$service['title'];?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="service">ВСЕ УСЛУГИ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="nav-products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Готовые изделия
                        </a>
                        <div class="dropdown-menu" aria-labelledby="nav-products">
                            <?php if ($products): ?>
                                <?php foreach ($products as $product): ?>
                                    <a class="dropdown-item" href="<?=$product['alias'];?>"><?=$product['title'];?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="product">ВСЯ ПРОДУКЦИЯ</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Контакты</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                    <button class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#modal-callback">Обратный звонок</button>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?=$content;?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-item d-flex align-items-center justify-content-center">
                <div class="footer-logo">
                    <img src="img/logo.png" alt="logo">
                </div>
            </div>
            <div class="col-lg-4 footer-item">
                <h5>Услуги</h5>
                <ul class="pl-0">
                    <?php if ($services): ?>
                        <?php foreach ($services as $service): ?>
                            <li><a href="service/<?=$service['alias'];?>">
                                    <?=$service['title'];?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <h5 class="mt-4">Готовые продукты</h5>
                <ul class="pl-0">
                    <?php if ($products): ?>
                        <?php foreach ($products as $product): ?>
                            <li><a href="<?=$product['alias'];?>">
                                    <?=$product['title'];?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-4 footer-item">
                <h5>Контакты</h5>
                <p class="mb-0">Телефон:</p>
                <p>+7 (495) 142-48-96</p>
                <p class="mb-0">Адрес:</p>
                <p>г. Москва, Варшавкое ш., 28Ж</p>
                <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-callback">Связаться с нами</a>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modal-callback" tabindex="-1" role="dialog" aria-labelledby="modal-callbackTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-callbackTitle">Оставьте заявку<br><span>менеджер свяжется с вами в течение 15 минут</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="main/sendshort" method="post" class="needs-validation" novalidate>
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
                    <hr>
                    <button class="btn btn-block" type="submit">Отправить</button>
                    <p class="mt-2">*нажимая кнопку, вы даете согласие на обработку персональных данных</p>
                </form>
            </div>
        </div>
    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/jalousie.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    $('.modal-body').on('click', '.btn-to-contact', function(){
        window.location.href='main/science-and-art#contact';
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>