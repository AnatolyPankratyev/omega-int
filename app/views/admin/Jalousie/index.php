<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Жалюзийные дверцы</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>Размеры</th>
                        <th>Карточка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($jals): ?>
                        <?php foreach ($jals as $jal): ?>
                            <tr>
                                <td><?=$jal->height;?> x <?=$jal->width;?></td>
                                <td><a href="<?=ADMIN;?>/jalousie/edit?id=<?=$jal['id'];?>" class="btn btn-success">Карточка</a></td>
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