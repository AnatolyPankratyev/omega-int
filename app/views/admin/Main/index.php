<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Панель управления</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главная</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?=$countRequests;?></h3>

                    <p>Заявки</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <a href="<?=ADMIN;?>/request" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?=$countServices;?></h3>

                    <p>Услуги</p>
                </div>
                <div class="icon">
                    <i class="fas fa-paint-roller"></i>
                </div>
                <a href="<?=ADMIN;?>/services" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?=$countProducts;?></h3>

                    <p>Готовая продукция</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tag"></i>
                </div>
                <a href="<?=ADMIN;?>/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>