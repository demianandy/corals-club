<div class="footer" id="footer">
    <div class="footer-content">
        <div class="footer-left">
            <span>Разделы:</span>
            <div class="razdeli">
            <?if($file=='reviews' or $file=='about'){?>
                <div class="left">
                    <?if($file!='index'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../index.php">Главная</a></span>
                    <?}?>
                    <?if($file!='products'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../products.php">Товары</a></span>
                    <?}?>
                </div>
                <div class="right">
                    <?if($file!='articles'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../articles.php">Статьи</a></span>
                    <?}?>
                    <?if($file!='reviews'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../reviews.php">Отзывы</a></span>
                    <?}?>
                    <?if($file!='about'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../about.php">О нас</a></span>
                    <?}?>
                </div>
            </div>
            <?} else {?>
                <div class="left">
                    <?if($file!='index'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../index.php">Главная</a></span>
                    <?}?>
                    <?if($file!='products' and $file!='specification' and $file!='section'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../products.php">Товары</a></span>
                    <?}?>
                    <?if($file!='articles'and $file!='article'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../articles.php">Статьи</a></span>
                    <?}?>
                </div>
                <div class="right">
                    <?if($file!='reviews'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../reviews.php">Отзывы</a></span>
                    <?}?>
                    <?if($file!='about'){?>
                        <span><i class="fas fa-angle-double-right"></i><a href="../about.php">О нас</a></span>
                    <?}?>
                </div>
            </div>
            <?}?>
        </div>
        <div class="footer-center">
            <span>Контакты:</span>
            <a href="mailto:corals_club@mail.ru?subject=The question of the Corals-Club">corals_club@mail.ru</a>
            <div class="footer-social">
                <ul>
                    <li><a href="https://vk.com/koralsclub" target='_blank'><i class="fab fa-vk"></i></a></li>
                    <li><a href="https://vk.com/away.php?to=https%3A%2F%2Fwww.facebook.com%2FCorals_club-624426478193698%2F&cc_key=" target='_blank'><i class="fab fa-facebook-f"></i></i></a></li>
                    <li><a href="https://vk.com/away.php?to=https%3A%2F%2Fwa.me%2F998977539453&cc_key=" target='_blank'><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://vk.com/away.php?to=https%3A%2F%2Ft.me%2Fcorals_club&cc_key=" target='_blank'><i class="fab fa-telegram-plane"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-right">
            <span>Поддержка:</span>
             <a href="../contacts.php" class="footer_con"><i class="fas fa-angle-double-right"></i>Обратная связь</a>
            <a href="tel:+998977539453" class="tel">+ 998 (97) 7539453</a>
        </div>
    </div>

    <div class="footer-footer">
            <span>© 2017-<?=$data;?>. <span>Corals-Club</span>. Все права защищены.</span>
            <p>Разработка сайта: <a href="http://xaritonov.ru/ "target='_blank'>«Зона высокого качества»</a></p>
    </div>
</div>



</body>
</html>


