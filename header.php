<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>

  <body data-spy="scroll" data-target=".navigation"<?php  body_class(); ?>>
    <header class="row no-max pad main">
        <div class="page-wrapper">



<!--            <!-- Headerbar Navigation-->
<!--                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!--            <div class="fNavBar">-->
<!--                <nav class="menu navigation">-->
<!--                    <ul class="navbar menu-nav nop" id="top-menu">-->
<!--                        <li><a class="easing" href="#sHome">Intro</a></li>-->
<!--                        <li><a class="easing" href="#sFolio">Portofolio</a></li>-->
<!--                        <li><a class="easing" href="#sAbout">About</a></li>-->
<!--                        <li><a class="easing" href="#sServices">Services</a></li>-->
<!--                        <li><a class="easing" href="#sBlog">Blog</a></li>-->
<!--                        <li class="dropdown">-->
<!--                            <a class="easing dropdown-toggle" href="" data-toggle="dropdown" data-hover="dropdown">Pages</a>-->
<!--                            <ul class="dropdown-menu nop">-->
<!--                                <li><a href="folio3.html">Portofolio Three</a></li>-->
<!--                                <li><a href="folio1.html">Portofolio Four</a></li>-->
<!--                                <li><a href="folio2.html">Portofolio Five</a></li>-->
<!--                                <li><a href="blog_post.html">Blog post </a></li>-->
<!--                            </ul>-->
<!---->
<!--                        </li>-->
<!--                        <li><a class="easing" href="#sContact">Contact</a></li>-->
<!--                    </ul>-->
<!--                </nav>-->
<!--            </div>-->

  <nav>


    <?php

      $defaults = array(
        'container' => false,
        'theme_location'  => 'primary-menu',
        'menu_class'  => 'fNavBar fNavBar-show menu navigation menu-nav nop'
      );

      wp_nav_menu( $defaults );

    ?>

  </nav>
</header>