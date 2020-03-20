<?php
 
 /**
  * Template Name: Pagina: Blog
  *
  * @package WordPress
  * @subpackage Tema
  * @since 1.0
  */
 
 get_header(); ?>


<div class="container">

    <div class="container-blog d-flex flex-row">

        <?php get_template_part('template-part/posts'); ?>

        <?php get_template_part('template-part/filtros'); ?>

    </div>


</div>