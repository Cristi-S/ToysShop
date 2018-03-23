<div class="row" id="appList">
    <?php foreach ($products as $product): ?>
        <div class="col-sm-6 col-md-4 card">
            <div class="thumbnail">
                <? echo '<img src="data:image/png;base64,' . base64_encode($product['image']) . '">'; ?>
                <div class="caption">
                    <h3><?= $product['name'] ?></h3>
                    <p><?= products_intro($product['description']) ?></p>
                    <p><a href="#" class="btn btn-primary" role="button"> <i class="glyphicon glyphicon-check"> </i> В
                            корзину</a> <a href="#" class="btn btn-info" role="button"><i
                                    class="glyphicon glyphicon-star"> </i>
                            В избранное</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php endforeach ?>
</div>
</div>
