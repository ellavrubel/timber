
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php  bloginfo( 'description' ); ?> </title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">


    <?php wp_head(); ?>

</head>


<body>

<header class="header" style="background-image: url(img/header/header_bg.png);">

    <div class="header__inner">
        <img src=" <?php bloginfo( 'template_url' ); ?>/assets/img/header/small_house.png" alt="logo">
        <div class="header__name">
TIMBER HOUSE
</div>
        <a class="phone" href="tel:+75754565634"> +7 (575) 456-56-34 </a>

        <div class="header__title">
дома из бруса под ключ
</div>
        <div class="header__sale">
            <img src="img/header/header_gift.png" alt="">
        </div>
    </div>



</header>
