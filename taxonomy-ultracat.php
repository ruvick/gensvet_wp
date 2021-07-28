<?php get_header(); ?>

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
                            <a href="" class="breadcrumb-list-item__link">Продукция ГЕНСВЕТ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="products">
            <div class="container">
                <h1 class="products__title"><?php single_cat_title( '', true );?></h1> 
                <div class="products-wrap">
									<?php
										while(have_posts()):
											the_post();
											get_template_part('template-parts/product-elem');  
										endwhile;
									?>
                </div>
            </div>
        </section>
				<?php get_template_part('template-parts/subscription-section');?> 
    </main>

<?php get_footer(); ?>  