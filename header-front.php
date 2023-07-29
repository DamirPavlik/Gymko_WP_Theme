<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content= "width=device-width, maximum-scale=1.0">
    <meta name="viewport" content= "width=device-width, user-scalable=0">

    <link rel="shortcut icon" href="/wp-content/themes/gymko/assets/images/gymko_logo_transperent.webp">

    <meta
    name="description"
    content=""
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
        wp_head();
    ?>
</head>
<body>

<div class="loader-wrapper">
    <div class="custom-loader"></div>
</div>
    
<div class="header-p-relative">
    <header class="header ">
        <div class="container custom_ctn">
            <nav class="nav">
                <div class="logo-img">
                    <img src="/wp-content/themes/gymko/assets/images/Gymko_logo_sa_tekstom-svg.svg" alt="">
                </div>

                <div class="main-nav-items">
                    <ul>
                        <div class="dropdown-custom"  data-dropdown>
                            <li><a class="dropdown-link-custom" data-dropdown-button>O nama<span class="arrow-dropdown">&darr;</span></a></li>
                            <div class="dropdown-menu-custom" data-add-class>
                                <a href="/o-gimnaziji" class="dropdown-item">O gimnaziji</a>
                                <a href="/uspesni-ucenici" class="dropdown-item">Uspešni Učenici</a>
                                <a href="/dokumenti" class="no-margin dropdown-item">Dokumenti</a>
                            </div>
                        </div>
                        <li><a href="/zaposleni" class="">Zaposleni</a></li>
                        <li><a href="/novosti" class="">Novosti</a></li>
                        <li><a href="/galerija" class="">Galerija</a></li>
                        <li><a href="/upis" class="">Upis</a></li> 
                        <li><a href="/kontakt" class="">Kontakt</a></li>
                    </ul>
                </div>

                <div class="btn-mobile-nav">
                <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                    <path
                        class="line top"
                        d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"
                        />
                    <path
                        class="line middle"
                        d="m 70,50 h -40" 
                        />
                    <path
                        class="line bottom"
                        d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"
                        />
                </svg>
                </div>
            </nav>
        </div>
    </header>
</div>