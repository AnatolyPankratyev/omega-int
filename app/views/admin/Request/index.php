<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Короткие заявки</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Статус</th>
                        <th>Посмотреть</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($simpleRequests): ?>
                        <tr>
                            <?php foreach ($simpleRequests as $request): ?>
                                <td><?=$request->name;?></td>
                                <td><?=$request->tel;?></td>
                                <td>
                                    <?php if($request->status == 0): ?>
                                        <span class="text-success">Новый</span>
                                    <?else: ?>
                                        <span class="">Обработанный</span>
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?=ADMIN;?>/request/simple?id=<?=$request['id'];?>"><i class="fas fa-eye"></i></a></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>




<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Заявки по покраске</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Статус</th>
                        <th>Посмотреть</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($paintingRequest): ?>
                        <tr>
                            <?php foreach ($paintingRequest as $request): ?>
                                <td><?=$request->name;?></td>
                                <td><?=$request->tel;?></td>
                                <td><?=$request->email;?></td>
                                <td>
                                    <?php if($request->status == 0): ?>
                                        <span class="text-success">Новый</span>
                                    <?else: ?>
                                        <span class="">Обработанный</span>
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?=ADMIN;?>/request/painting?id=<?=$request['id'];?>"><i class="fas fa-eye"></i></a></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Заявки жалюзи</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Статус</th>
                        <th>Посмотреть</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($jalousieRequests): ?>
                        <tr>
                            <?php foreach ($jalousieRequests as $request): ?>
                                <td><?=$request->name;?></td>
                                <td><?=$request->tel;?></td>
                                <td><?=$request->email;?></td>
                                <td>
                                <?php if($request->status == 0): ?>
                                    <span class="text-success">Новый</span>
                                <?else: ?>
                                    <span class="">Обработанный</span>
                                <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?=ADMIN;?>/request/jalousie?id=<?=$request['id'];?>"><i class="fas fa-eye"></i></a>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>