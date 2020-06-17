<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase mr-4">
                    <i class="fas fa-text-width mr-4"></i>
                    <?=$request['name'];?>
                </h3>
                <?php if(!$request['status']): ?>
                    <a href="<?=ADMIN;?>/request/changej?id=<?=$request['id'];?>&status=1" class="btn btn-success btn-xs">Обработать</a>
                <?php else: ?>
                    <a href="<?=ADMIN;?>/request/changej?id=<?=$request['id'];?>&status=0" class="btn btn-default btn-xs">Вернуть на доработку</a>
                <?php endif; ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?=$request['name'];?></td>
                        <td><?=$request['tel'];?></td>
                        <td><?=$request['email'];?></td>
                        <td><?php if($request['status'] == 0): ?>
                                Новый
                            <?else: ?>
                            Обработанный
                        </td><?php endif; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase mr-4">
                    Стандартные размеры
                </h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Ширина</td>
                        <td><?=$price['width']?></td>
                    </tr>
                    <tr>
                        <td>Высота</td>
                        <td><?=$price['height']?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase mr-4">
                    Нестандартные размеры
                </h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Ширина</td>
                        <td><?=$request['width_u']?></td>
                    </tr>
                    <tr>
                        <td>Высота</td>
                        <td><?=$request['height_u']?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>