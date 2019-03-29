<?php
/** @var \app\model\Products $product */
?>

<h2>Наименование:<?=$product->name?></h2>
<p>Описание:<?=$product->description?></p>
<p>Цена:<?=$product->price?></p>

<!-- <form action="/product/AddBasket/" method="get">
    <input hidden type="text" name="id" value="<?=$product->id?>">
    <input type="submit" name="action" value="Купить">
</form> -->

<button id="<?=$product->id?>" class="action">Купить</button>
