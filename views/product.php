<?php include 'includes/header.php'; ?>
<div class="list-view" id="appList">

    <div class="col-sm-6 col-md-4 card">
        <div class="thumbnail">
            <? echo '<img src="data:image/png;base64,' . base64_encode($product['image']) . '">'; ?>
            <div class="caption">
                <h3><?= $product['name'] ?></h3>
                <h6><?= $product['cost'] ?></h6>
                <p><a href="#" class="btn btn-primary" role="button"> <i class="glyphicon glyphicon-check"> </i> В
                        корзину</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <h4>Описание товара</h4>
    <p><?= $product['description'] ?></p>
</div>
<?php include 'includes/footer.php' ?>

