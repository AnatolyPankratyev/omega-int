<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase mr-4">
                    <i class="fas fa-text-width mr-4"></i>
                    <?=$request['name'];?>
                </h3>
                    <?php if(!$request['status']): ?>
                        <a href="<?=ADMIN;?>/request/changes?id=<?=$request['id'];?>&status=1" class="btn btn-success btn-xs">Обработать</a>
                    <?php else: ?>
                        <a href="<?=ADMIN;?>/request/changes?id=<?=$request['id'];?>&status=0" class="btn btn-default btn-xs">Вернуть на доработку</a>
                    <?php endif; ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$request['name'];?></td>
                            <td><?=$request['tel'];?></td>
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
    </div>
</div>