

<?php get_header(); ?>


<main class="main">
  <div class="container">
    <div class="main__title">
        <?php the_field('main__title'); ?>
</div>
    <div class="main__text">

        <?php the_field('main__text'); ?>

</div>

    <div class="main__img">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/set2/wood.png" alt="">
    </div>

    <div class="project">
        <div class="project__title">
ПРОЕКТЫ ДОМОВ ИЗ БРУСА
</div>
        <div class="project__item">
            <div class="project__name">ДОМ #1</div>
            <div class="project__size">Размер дома: 6 x 6</div>
            <div class="project__area">Общая площадь дома: 54 кв. м </div>
            <div class="project__price">Стоимость - 402 000 рублей </div>

            <div class="project__images">
                <div class="project__images-item"><img src="img/set3/set3_house.png" alt=""></div>
                <div class="project__images-item"><img src="img/plan.png" alt=""></div>
            </div>
        </div>

        <div class="project__item">
            <div class="project__name">ДОМ #2</div>
            <div class="project__size">Размер дома: 6 x 6</div>
            <div class="project__area">Общая площадь дома: 54 кв. м </div>
            <div class="project__price">Стоимость - 402 000 рублей </div>

            <div class="project__images">
                <div class="project__images-item"><img src="img/set3/set3_house.png" alt=""></div>
                <div class="project__images-item"><img src="img/plan2.png" alt=""></div>
            </div>
        </div>

        <div class="project__item">
            <div class="project__name">ДОМ #3</div>
            <div class="project__size">Размер дома: 6 x 6</div>
            <div class="project__area">Общая площадь дома: 54 кв. м </div>
            <div class="project__price">Стоимость - 402 000 рублей </div>

            <div class="project__images">
                <div class="project__images-item"><img src="img/house3.png" alt=""></div>
                <div class="project__images-item"><img src="img/plan3.png" alt=""></div>
            </div>
        </div>
    </div>
  </div>

        <div class="download">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/small_house.png" alt="">
            <div class="download__link">
            <a href="<?php the_field('download__link'); ?>" download="">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
            </div>
        </div>


        <div class="container">
        <div class="gallery">
            <div class="gallery__title">
                <?php the_field('gallery__title'); ?>
            </div>
            <div class="gallery__text">
                <?php the_field('gallery__text'); ?>
            </div>
            <div class="gallery__inner">
                <?php the_field('photos'); ?>
            </div>
        </div>

        <div class="main__img">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/set2/wood.png" alt="">
        </div>
        </div>
</main>

<?php get_footer(); ?>
