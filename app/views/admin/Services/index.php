<div class="row">
    <?php if ($services): ?>
    <?php foreach ($services as $service): ?>
    <div class="col-12">
        <a href="<?=ADMIN;?>/services/view?id=<?=$service->id;?>">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-eye"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?=$service->title;?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </a>
    </div>
    <?php endforeach; ?>
    <?endif;?>
</div>