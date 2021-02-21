<div class="lenta">
        <div class="row slider">
            <?foreach($top as $item):?>
                    <div class="item">
                        <span class="head"><a href="../specification.php?id=<?=$item['id'];?>"><?=$item['name'];?></a></span>
                        <a href="../specification.php?id=<?=$item['id'];?>" class="img"><img src="../img/<?=$item['id'];?>.png" alt="Препарат"></a>
                        <h3><?=$item['info'];?></h3>
                        <span class="h4"><p class="sale"><?=$item['sale'];?>&nbsp;</p> <i class="fas fa-ruble-sign"></i></span>
                        <a href="https://ru.coral-club.com/registration/?REF_CODE=653753902933" class="ref" target='_blank'>Купить со скидкой 20%</a>
                    </div>
            <?endforeach;?>
        </div>
</div>

</div>  