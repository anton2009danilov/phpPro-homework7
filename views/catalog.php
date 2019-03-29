<?php
foreach ($catalog as $item):?>

<a href="product/card/?id=<?=$item['id']?>">
    <h2><?=$item['name']?></h2>
</a>
<p><?=$item['description']?></p>
<p>Стоимость:<?=$item['price']?></p>

<button id="<?=$item['id']?>" class="action">Купить</button>

<hr>

<?endforeach;?>

<!-- <script>
    $(document).ready(function(){
        $(".action").on('click', function(){
            var id = $("#id").val()
            $.ajax({
                url: "/product/AddBasket/",
                type: "POST",
                dataType : "json",
                data:{
                    id: id
                },
                error: function() {alert('error');},
                success: function(answer){
                    {window.location.reload()}
                }

            })
        });

    });
</script> -->
