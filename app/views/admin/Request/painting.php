<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase mr-4">
                    <i class="fas fa-text-width mr-4"></i>
                    <?=$request['name'];?>
                </h3>
                <?php if(!$request['status']): ?>
                    <a href="<?=ADMIN;?>/request/changep?id=<?=$request['id'];?>&status=1" class="btn btn-success btn-xs">Обработать</a>
                <?php else: ?>
                    <a href="<?=ADMIN;?>/request/changep?id=<?=$request['id'];?>&status=0" class="btn btn-default btn-xs">Вернуть на доработку</a>
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
        <div class="mt-4 card p-3">
            <p><b>Сообщение от клиента:</b></p>
            <hr>
            <p><?=$request['note'];?></p>
        </div>
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Тип изделия</td>
                        <td><?=$type_product;?></td>
                    </tr>
                    <tr>
                        <td>Тип покрытия</td>
                        <td><?=$type_cover;?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>упаковка</td>
                        <td><?=$request['adv1'];?></td>
                    </tr>
                    <tr>
                        <td>шпаклевка</td>
                        <td><?=$request['adv2'];?></td>
                    </tr>
                    <tr>
                        <td>удаление сколов</td>
                        <td><?=$request['adv3'];?></td>
                    </tr>
                    <tr>
                        <td>удаление старого покрытия</td>
                        <td><?=$request['adv4'];?></td>
                    </tr>
                    <tr>
                        <td>разборка/сборка изделий</td>
                        <td><?=$request['adv5'];?></td>
                    </tr>
                    <tr>
                        <td>снятие фурнитуры</td>
                        <td><?=$request['adv6'];?></td>
                    </tr>
                    <tr>
                        <td>подбор цвета по образцу</td>
                        <td><?=$request['adv7'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>