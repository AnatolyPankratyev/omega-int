<div class="row">
    <?php if ($products): ?>
        <?php foreach ($products as $product): ?>
            <div class="col-12">
                <a href="<?=ADMIN . '/' . $product->alias;?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-eye"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?=$product->title;?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?endif;?>
</div>