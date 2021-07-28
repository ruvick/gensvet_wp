<?php 

/*
Template Name: Страница Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main class="main">
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-list-item">
                            <a href="" class="breadcrumb-list-item__link">Каталог</a>
                        </li>
                        <li class="breadcrumb-list-item">
                            <a href="" class="breadcrumb-list-item__link">О компании</a>
                        </li>
                        <li class="breadcrumb-list-item">
                            <a href="" class="breadcrumb-list-item__link">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <h1 class="contacts__title"><?php the_title();?></h1> 
                <div class="contacts-wrap">
                    <div class="contacts-wrap-left">
                    <? $org = carbon_get_theme_option("as_company"); if (!empty($org)){?><h2 class="contacts-wrap-left__title"><? echo $org; ?></h2><?}?>
                        <div class="contacts-wrap-left-block">
                            <h3 class="contacts-wrap-left-block__title">Отдел продаж:</h3>
                            <div class="contacts-wrap-left-block-links">
                            <? $telc = carbon_get_theme_option("as_phone_2"); if (!empty($telc)){?>
                            <div class="contacts-wrap-left-block-links-link">
                                <span class="icon-points-phone"></span>
                                    <a href="tel:<? echo preg_replace('/[^0-9]/', '', $telc); ?>" class="partner-wrap-contacts-links-wrap__link partner-wrap-contacts-links-wrap__link--nondec"><? echo $telc; ?></a>
                                </div>
                            <?}?>
                            <? $mail = carbon_get_theme_option("as_email"); if (!empty($mail)){?>
                                <div class="contacts-wrap-left-block-links-link">
                                    <span class="icon-points-email"></span>
                                    <a href="mailto:<? echo $mail; ?>" class="partner-wrap-contacts-links-wrap__link"><? echo $mail; ?></a>
                                </div>
                            <?}?>
                            </div>
                        </div>
												<? $mode = carbon_get_theme_option("as_schedule"); if (!empty($mode)){?>
                        <div class="contacts-wrap-left-block">
                            <h3 class="contacts-wrap-left-block__title">Режим работы:</h3>
                            <p class="contacts-wrap-left-block__desc"><? echo $mode; ?><br>Часовой пояс: <span class="contacts-wrap-left-block__desc contacts-wrap-left-block__desc--gray">МСК +4</span></p>
                        </div>
												<?}?>
                        <? $adr_3 = carbon_get_theme_option("as_address_3"); if (!empty($adr_3)){?>
                        <div class="contacts-wrap-left-block">
                          <h3 class="contacts-wrap-left-block__title">Фактический адрес:</h3>
                          <p class="contacts-wrap-left-block__desc"><? echo $adr_3; ?></p>
                        </div>
                        <?}?>
												<? $adr_4 = carbon_get_theme_option("as_address_3"); if (!empty($adr_4)){?>
                        <div class="contacts-wrap-left-block">
                          <h3 class="contacts-wrap-left-block__title">Юридический адрес:</h3>
                          <p class="contacts-wrap-left-block__desc"><? echo $adr_4; ?></p>
                        </div>
												<?}?>
                        <div class="contacts-wrap-left-social">
                            <h2 class="contacts-wrap-left-social__title">Мы в соцсетях</h2>
                            <div class="contacts-wrap-left-social-links">
                                <a href="<?php echo carbon_get_theme_option('as_youtube'); ?>" class="contacts-wrap-left-social-links-link">
                                    <span class="icon-social-1 icon-social"></span>
                                    <!-- <img src="./img/contacts/social-1.svg" alt="" class="contacts-wrap-left-social-links-link__img"> -->
                                </a>
                                <a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="contacts-wrap-left-social-links-link">
                                    <span class="icon-social-2 icon-social"></span>
                                </a>
                                <a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="contacts-wrap-left-social-links-link">
                                    <span class="icon-social-3 icon-social"></span>
                                </a>
                                <a href="<?php echo carbon_get_theme_option('as_ok'); ?>" class="contacts-wrap-left-social-links-link">
                                    <span class="icon-social-4 icon-social"></span>
                                </a>
                                <a href="<?php echo carbon_get_theme_option('as_face'); ?>" class="contacts-wrap-left-social-links-link">
                                    <span class="icon-social-5 icon-social"></span>
                                </a>
                                <a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="contacts-wrap-left-social-links-link">
                                    <span class="icon-social-6 icon-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-wrap-map">
                        <iframe src="<?php echo carbon_get_theme_option('map_point'); ?>" width="100%" height="100%" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
                        <!-- <img src="./img/contacts/map.png" alt="" class="contacts-wrap-map__img"> -->
                    </div>
                </div>

            </div>
        </section>

				<?php get_template_part('template-parts/subscription-section');?> 

    </main>

<?php get_footer(); 
