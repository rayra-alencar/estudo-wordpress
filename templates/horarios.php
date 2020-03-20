<?php

/**
 * Template Name: Pagina: Horarios
 *
 * @package WordPress
 * @subpackage Tema
 * @since 1.0
 */

get_header(); ?>


<!-- <div class="container-fluid p-0" id="horarios"> -->

<div class="mainContainer-horarios m-0 p-0">

    <div class="banner-horarios" style="background: url( <?php the_field(img_banner); ?> )">

        <div id="container-horarios" class="col-lg-10 col-md-12 m-auto ">
            <div id="container-txt" class="col-11">
                <p class="h1 text-white text-right pb-2 font-weight-bold">
                    <?php if (get_field(titulo_banner)) :
                        the_field(titulo_banner);
                    endif;
                    ?>
                </p>

                <p id="descricao-horarios"
                    class="h6 text-white text-right col-lg-4 col-md-12 mr-0 pr-0 ml-auto pb-lg-5">
                    <?php if (get_field(descricao_banner)) :
                        the_field(descricao_banner);
                    endif;
                    ?>
                </p>
            </div>

            <div id="divisao"></div>

            <div id="container-btn" class="mx-auto d-flex flex-wrap justify-content-center col-12 p-md-0">
                <!-- <div id="btn-group-1" class="my-2 d-flex flex-row justify-content-center"> -->
                <!-- pegar o nome do type Eswtados no custom type -->

                <a href="#sp" class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a href="#mg" class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>

                <!-- </div>

                <div id="btn-group-2" class="mt-2 d-flex flex-row justify-content-center"> -->
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <a class="btn-estado btn btn-light text-muted py-2 m-1 col-lg-2">Estado</a>
                <!-- </div> -->
            </div>

        </div>
    </div>


    <div class="contentContainer-horarios">

        <div class="container pt-3">
            <h2 id="sp" class="estado text-muted font-weight-bold pb my-5  px-4 ">SÃO PAULO</h2>
        </div>


        <div class="container content-horarios d-flex flex-row justify-content-around border-bottom py-lg-3"
            style="letter-spacing: 0;">

            <div class="row col-lg-12 col-md-10 p-2">

                <?php     
                    $args = array(
                        'post_type'     => 'lojas',                    
                        'posts_per_page' => -1,

                        'tax_query' => array(                            
                           
                            array(
                                'taxonomy' => 'estados', // (string) nome da taxonomia
                                'field' => 'sp', // (string) id, nome ou slug
                                'terms' => '7', //(int/string/array) id da taxonomia
                                'include_children' => false //(bool) true por default
                                
                            )
                        )
                    );
            
                    $query_lojas = new WP_Query($args);

                    if($query_lojas -> have_posts()) :
                        while($query_lojas -> have_posts()) :  $query_lojas -> the_post(); ?>

                <div class=" flex-column text-muted col-lg-4 col-md-10 py-2">
                    <h5 class="text-uppercase font-weight-bold"> <?php the_title(); ?> </h5>
                    <h6> <?php the_content(); ?> </h6>
                </div>

                <?php 
                        endwhile;
                    endif;

                wp_reset_postdata();
        ?>
            </div>

        </div>


        <div class="container pt-3">
            <h2 id="mg" class="estado text-muted font-weight-bold pb my-5  px-4 ">MINAS GERAIS</h2>
        </div>


        <div class="container content-horarios d-flex flex-row justify-content-around border-bottom py-lg-3"
            style="letter-spacing: 0;">

            <div class="row col-lg-12 col-md-10 p-2">

                <?php     
                    $args = array(
                        'post_type'     => 'lojas',                    
                        'posts_per_page' => 3,

                        'tax_query' => array(                            
                           
                            array(
                                'taxonomy' => 'estados', // (string) nome da taxonomia
                                'field' => 'mg', // (string) id, nome ou slug
                                'terms' => '8', //(int/string/array) id da taxonomia
                                'include_children' => false //(bool) true por default
                                
                            )
                        )
                    );
            
                    $query_lojas = new WP_Query($args);

                    if ($query_lojas -> have_posts()) :
                        while ($query_lojas -> have_posts()) :  $query_lojas -> the_post(); ?>

                <div class=" flex-column text-muted col-lg-4 col-md-10 py-2">
                    <h5 class="text-uppercase font-weight-bold"> <?php the_title(); ?> </h5>
                    <h6> <?php the_content(); ?> </h6>
                </div>

                <?php 
                        endwhile;
                    endif;

                wp_reset_postdata();
        ?>
            </div>

        </div>

    </div>


    <div class="container p-5">
        <div id="btn-loja-proxima" class="row justify-content-center">
            <a href="" id="btn-loja" class="btn text-white p-2 px-4"><span></span> ENCONTRE A LOJA MAIS PRÓXIMA</a>
        </div>
    </div>

</div>
<!-- </div> -->