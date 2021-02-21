<div class="otziv" id="otziv">


        <?php 
            if($_SESSION['err']){?>
                <p class="rewiev_add"><?=$_SESSION['err'];?></p>
            <?}
                unset($_SESSION['err']);
        ?>


    <?php foreach ($review as $item): ?>
    <div class="letter">
        <p><?=$item['rewiev'];?></p>
        <div class="letter-footer">
            <span><?=$item['data'];?></span>
            <h3><?=$item['avtor'];?></h3>
        </div>
    </div>
    <?endforeach;?>
    <?php if(!$_SESSION['user']){?>
    <p class="warning">Чтобы оставить отзыв, зарегистрируйтесь</p>
    <?}?>
    <?php if($_SESSION['user']){?>
    <div class="written">
        <form action="../connect.php" method="POST" id="form">
            <textarea placeholder="Текст отзыва" autocomplete="off" id="rew" name="rew"></textarea>
            <div class="bottom">
            <p>
            <?php 
                if($_SESSION['errr']){?>
                    <?=$_SESSION['errr'];?>
                <?}
                    unset($_SESSION['errr']);
            ?>
            </p>
                <input type="submit" value="Отправить" class="connector" id="addrew">
            </div>
        </form>
    </div>
    <?}?>
</div>