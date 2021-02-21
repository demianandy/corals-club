<div class="opisanie" id="opisanie">
    <div class="top-info">
        <div class="study">
            <div class="image">
                <img src="../img/<?=$menu['id'];?>.png" alt="Препарат">
            </div>
            <div class="image-info">
                <div class="image-info-top">
                    <div class="name_eng">
                        <span><?=$menu['name'];?></span>
                        <span><?=$menu['eng'];?></span>
                    </div>
                    <p><?=$menu['type'];?></p>
                </div>
                <div class="image-info-bottom">
                    <div class="name_eng">
                        <p><span>Форма выпуска:</span><span class="right"><?=$menu['info'];?></span></p>
                        <p><span>Производство:</span><span class="right"><?=$menu['country'];?></span></p>
                    </div>
                    <div class="form">
                        <a href="../section.php?id=<?=$menu['id'];?>">Похожие товары</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="present">
            <div class="sostav">
                <p class="big-bon"><span>Состав: </span><?=$menu['sostav'];?></p>
            </div>
            <div class="sostav">
                <a href="https://ru.coral-club.com/registration/?REF_CODE=653753902933" class="ref" target='_blank'>Купить со скидкой 20%</a>
                <span class="h4"><p class="sale"><?=$menu['sale'];?> </p> <i class="fas fa-ruble-sign"></i></span>
            </div>
            <div class="sostav">
                <p class="paragraph"><?=mb_substr($menu['text'], 0, 150);?>... <a href="#info-info" class="ssilka">читать далее</a></p>
            </div>
        </div>
    </div>
    <div class="info-info" id="info-info">
        <p class="paragraph"><?=$menu['text'];?></p>
    </div>

</div>