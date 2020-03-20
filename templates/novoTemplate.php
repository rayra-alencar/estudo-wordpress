<?php
 
 /**
  * Template Name: novo layout
  *
  */
 
get_header(); ?>


<div class="col-12">


    <div id="menu-lateral" class="col-md-3 py-5 fixed-top"
        style="background-color: <?php the_field('cor_menu_lateral'); ?> ">

        <div class="d-flex flex-column">

            <div id="fotinha" class="mx-auto">
                <img class="img-fluid rounded-circle mx-auto"
                    style="background: url(<?php the_field(foto_perfil); ?>)" />
            </div>

            <div id="container-sobre" class=" col-10 p-2 mt-4 mx-auto">

                <h5 id="nome" class="font-weight-bold text-center">
                    <?php
                    if(get_field(nome_menu_lateral)) :
                        the_field(nome_menu_lateral);
                    endif;
                    ?>
                </h5>

                <span id="descricao" class="text-center text-break">
                    <?php
                        if(get_field(descricao_menu_lateral)) :
                            the_field(descricao_menu_lateral);
                        endif;
                    ?>
                </span>
            </div>

        </div>

    </div>



    <div id="pagina-principal" class="col-md-9 d-flex flex-column p-0">

        <div id="mainContainer">

            <div id="parallax-inicial" class="bg-light" style="background: url(<?php the_field(banner_parallax_1) ?>)">
                <div id="titulo_parallax-1" class="h2">
                    <?php
                if(get_field(titulo_parallax_1)) :
                    the_field(titulo_parallax_1);
                endif;
                ?>
                </div>
            </div>

            <div id="parallax_content--primario" class="parallax_content bg-dark"
                style="background: url(<?php the_field(banner_parallax_2) ?>)">

                <div id="content">
                    <div id="titulo_parallax-1" class="h1">
                        <?php
                if(get_field(titulo_parallax_2)) :
                    the_field(titulo_parallax_2);
                endif;
                ?>
                    </div>
                </div>

            </div>

            <div id="parallax_content--secundario" class="parallax_content bg-secondary"
                style="background: url(<?php the_field(banner_parallax_3) ?>)">

                <div id="content">
                    <div id="titulo_parallax-1" class="h2">
                        <?php
                if(get_field(titulo_parallax_2)) :
                    the_field(titulo_parallax_2);
                endif;
                ?>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>