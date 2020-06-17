<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Двери массив сосна</h3>
                <a class="ml-5 btn btn-success" href="<?=ADMIN;?>/doors-pine/add">Добавить</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>Модель</th>
                        <th>Карточка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($doors): ?>
                        <?php foreach ($doors as $door): ?>
                            <tr>
                                <td><?=$door->title;?></td>
                                <td><a href="<?=ADMIN;?>/doors-pine/edit?id=<?=$door['id'];?>" class="btn btn-success">Карточка</a></td>
                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>