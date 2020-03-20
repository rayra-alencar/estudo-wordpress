<?php
 
/**
 * Template Name: Pagina: Home
 *
 * @package WordPress
 * @subpackage Tema
 * @since 1.0
 */

get_header(); ?>

<!-- <h1>
	<?php echo 'Hello world'; ?>
</h1> -->


<!-- CONTAINER PEGANDO TODA A PAGINA-->
<div class="container-fluid p-0" id="top-homepage">

    <!-- CONTAINER PRA TODA A PAGINA: PARALLAX-->
    <div class="mainContainer">

        <!-- ELEMENTO DE FUNDO DO PARALLAX -->
        <div class="parallaxContainer" style="background:url(<?php the_field(imgtitle_homepage); ?>)">


            <div id="txt-parallax" class="col-12 m-auto pb-4 d-flex flex-column">
                <span class="text-dark display-2 pb-5">Lorem ipsum</span>
                <!-- <a href="#" class="btn btn-outline-dark mx-auto px-5">contato</a> -->
            </div>

        </div>

        <!-- DIV QUE EMPURRA O PARALLAX -->
        <div class="contentContainer">
            <div class="content">

                <div>
                    <h1 id="navbar-handler" class="text-dark text-center p-5">Lorem ipsum 2</h1>
                </div>

            </div>
        </div>


        <!-- FAIXA -->
        <div class="container-fluid">
            <div class="row">

                <div class="jumbotron jumbotron-fluid col-12 col-12 p-md-1 p-lg-5 bg-light shadow">
                    <h1 class="text-dark px-5">
                        <?php 
						if(get_field(helloworld_hero_homepage)) :
							the_field(helloworld_hero_homepage);
						endif;
						?>

                    </h1>
                    <p class="lead text-dark h5 px-5 h5">
                        <?php 
						if(get_field(descricao_jumbotron_homepage)) :
							the_field(descricao_jumbotron_homepage);
						endif;
						?>
                    </p>
                </div>

            </div>
        </div>

        <!-- LISTA DE POSTS -->
        <div class="container">
            <div class="row col-12">
                <div id="posts" class="d-flex flex-column justify-content-right  m-md-3 m-5 px-auto">

                    <!-- PEGANDO CONTEUDO EXISTENTE NO TEMPLATE 'POSTS' -->
                    <div class="my-5"> <?php get_template_part('template-part/posts') ?>
                        <a class="text-muted text-right pr-5" href=" <?php echo get_permalink(2); ?> "><small> ver
                                tudo...
                            </small></a>
                    </div>


                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div id="cards-parallax" class="row" style="background: url(<?php the_field(montanhas_homepage); ?>);">

                <div id="faixa-cards" class="d-flex flex-row justify-content-around p-5">

                    <div class="card p-3 shadow my-auto col-md-3">
                        <div class="card-body">
                            <h5 class="card-title text-dark pb-2"> Primeiro card </h5>
                            <p class="card-text  text-muted">Dui vivamus arcu felisfsdfsdfs bibendum ut tristique
                                et egestas quis.
                            </p>
                            <a href="#" class="btn btn-dark">Ver mais</a>
                        </div>
                    </div>

                    <div class="card p-3 shadow my-auto col-md-3">
                        <div class="card-body">
                            <h5 class="card-title text-dark pb-2"> Segundo card </h5>
                            <p class="card-text  text-muted">Dui vivamus arcu felis bibendum ut tristique et
                                egestas quis.
                            </p>
                            <a href="#" class="btn btn-dark">Ver mais</a>
                        </div>
                    </div>

                    <div class="card p-3 shadow my-auto col-md-3">
                        <div class="card-body">
                            <h5 class="card-title text-dark pb-2"> Terceiro card </h5>
                            <p class="card-text  text-muted">Dui vivamus arcu felis oikas usah apsdibe kpa bibendum
                                ut tristique et egestas quis.
                            </p>
                            <a href="#" class="btn btn-dark">Ver mais</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div style="height:200px">
        </div>

    </div>

</div>






<?php get_footer(); ?>