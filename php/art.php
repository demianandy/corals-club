<div class="art" id="art">
        <?foreach ($art as $item):?>
            <div class="art-page">
                <img src="../img/articles/<?=$item['id'];?>.jpg" alt="Изображение для статьи">
                <h1><?=$item['name'];?></h1>
                <p><?=mb_substr($item['text'], 0, 120);?>...<a href="../php/article.php?art=<?=$item['id'];?>" class="show_text" target='_blank'> подробнее</a></p>
            </div>
        <?endforeach;?>
</div>