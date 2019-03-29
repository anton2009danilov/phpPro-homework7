<h2>Корзина</h2>

<?php
foreach ($products as $product):?>

<hr>
<a href="/product/card/?id=<?=$product['id_prod']?>">
    <h2><?=$product['name'];?></h2>
</a>
<p>Описание:<?=$product['description']?></p>
<p>Цена:<?=$product['price']?></p>

<button id="<?=$product['id_basket']?>" class="delete">Удалить</button>

<?endforeach;?>
