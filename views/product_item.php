<div class="product_item">
    <a href="">

    <div class="product_image">
			<img src="<?php echo BASE_URL; ?>media/products/<?php echo $images[0]['url']; ?>" width="100%" />
		</div>
		<div  class="product_name"><?php echo $name; ?></div>
		<div class="product_brand"><?php echo $brand_name; ?></div>
        <div class="price_view">
		<div class="product_price_from"><?php
			if($price_from != '0') {
				echo 'R$ '.number_format($price_from, 2, ',', '.');
			}
		?></div>
		<div class="product_price">R$ <?php echo number_format($price, 2, ',', '.'); ?></div>
		</div>
        <div style="clear:both"></div>
    </a>
</div>