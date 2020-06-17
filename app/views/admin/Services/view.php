<div class="card">
    <div class="container">
        <div class="card-header">
            <h5><?=$service->title;?></h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th class="text-center" scope="col">Отделка</th>
                    <th scope="col">Ед. измерения</th>
                    <th scope="col">Цена (руб.)</th>
                    <th>Изменить</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($prices as $price): ?>
                    <tr>
                        <th><?=$price->title;?></th>
                        <td><?=$price->measurement;?></td>
                        <td><?=$price->price;?></td>
                        <td><a href="<?=ADMIN;?>/services/edit?id=<?=$price->id;?>" class="btn btn-success">Изменить</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>