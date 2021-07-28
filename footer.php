<footer class="footer">
        <a href="#" class="footer-link-1">
            <img src="<?php echo get_template_directory_uri();?>/img/home/footer-whatsapp.svg" alt="" class="footer-link-1__img">
        </a>
        <a href="#top" class="footer-link-2">
            <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="footer-link-2__img">
        </a>
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-wrap">
                    <ul class="footer-top-wrap-list">
                        <li class="footer-top-wrap-list-item">
                            <a href="#" class="footer-top-wrap-list-item__link">Каталог</a>
                            <ul class="footer-top-wrap-list-item-sublist">
                                <li class="footer-top-wrap-list-item-sublist-item">
                                    <a href="#" class="footer-top-wrap-list-item-sublist-item__link">Продукция ГЕНСВЕТ</a>
                                </li>
                                <li class="footer-top-wrap-list-item-sublist-item">
                                    <a href="#" class="footer-top-wrap-list-item-sublist-item__link">Продукция DEKOlabs</a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-top-wrap-list-item">
                            <a href="#" class="footer-top-wrap-list-item__link">О компании</a>
                            <ul class="footer-top-wrap-list-item-sublist">
                                <li class="footer-top-wrap-list-item-sublist-item">
                                    <a href="#" class="footer-top-wrap-list-item-sublist-item__link">О нас</a>
                                </li>
                                <li class="footer-top-wrap-list-item-sublist-item">
                                    <a href="#" class="footer-top-wrap-list-item-sublist-item__link">Презентация компании (PDF)</a>
                                </li>
                                <li class="footer-top-wrap-list-item-sublist-item">
                                    <a href="#" class="footer-top-wrap-list-item-sublist-item__link">Сертификаты и награды</a>
                                </li>
                            </ul>
                        </li>      
                        <li class="footer-top-wrap-list-item"> 
                            <a href="#" class="footer-top-wrap-list-item__link">контакты</a>   
                            <ul class="footer-top-wrap-list-item-sublist">
                                <li class="footer-top-wrap-list-item-sublist-item">
                                  <? $tel = carbon_get_theme_option("as_phones_1"); if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer-top-wrap-list-item-sublist-item__link"><? echo $tel; ?></a><?}?> 
                                </li>
                                <li class="footer-top-wrap-list-item-sublist-item">
                                  <? $mail = carbon_get_theme_option("as_email"); if (!empty($mail)){?><a href="mailto:<? echo $mail; ?>" class="footer-top-wrap-list-item-sublist-item__link"><? echo $mail; ?></a><?}?>
                                </li>
                                <li class="footer-top-wrap-list-item-sublist-item">
                                  <? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><a href="#" class="footer-top-wrap-list-item-sublist-item__link"><? echo $adr; ?></a><?}?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="footer-top-wrap-links">
                        <a href="#" class="footer-top-wrap-links-link">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/footer-youtube.svg" alt="" class="footer-top-wrap-links-link__img">
                        </a>
                        <a href="#" class="footer-top-wrap-links-link">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/footer-inst.svg" alt="" class="footer-top-wrap-links-link__img">
                        </a>
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom">
                <p class="footer-bottom__desc">2021 © Все права защищены.</p>
                <a href="#" class="footer-bottom__link">Политика конфиденциальности</a>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>