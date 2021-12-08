<div class="prod">
    <?php
    $a = 0;
    ?>

    <?php foreach($list as $product_item): ?>
        <div class="product-view">
            <?php $this->loadView('product_item', $product_item); ?>
        </div>
        <?php
        if($a >=2){
            $a=0;
            echo '</div><div class="prod">';
        }else{
            $a++;
        }

        ?>
        <?php endforeach; ?>
</div>