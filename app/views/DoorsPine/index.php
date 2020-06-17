<section class="doors-section">
    <div class="container">
        <h1>Двери из массива сосны с отделкой</h1>
        <?php if ($doors): ?>
            <div class="row">
                <?php foreach ($doors as $door): ?>
                    <div class="col-md-3 d-flex align-items-center justify-content-center mt-5">
                        <a href="doors-pine/<?=$door->alias;?>">
                            <div class="doors-item">
                                <div class="doors-img">
                                    <img src="img/<?=$door->img;?>" alt="<?=$door->alias;?>">
                                </div>
                                <h4><?=$door->title;?></h4>
                                <h5><?=$door->price_1;?> руб.</h5>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>