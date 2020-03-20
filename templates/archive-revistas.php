<?php
 
 /**
  * Template Name: revista
  *
  */
 
get_header(); ?>


<div class="container mx-auto">
    <div id="logo-lelis" class="row col-md-2 col-lg-3 mb-3 mx-auto">
        <img class="img-fluid" src="
        
        <?php
        if(get_field(imagem_logo)) :
            the_field(imagem_logo);
        endif;
        ?>
        
        " />
    </div>
</div>


<div id="container-principal" class="container mt-5 mx-auto">

    <div id="archive" class="row d-flex flex-wrap justify-content-center col-10 mx-auto">

        <?php        

            $args = array(
                'post_type' => 'revistas',
                'posts_per_page' => -1,
                'orderby' => 'date'					
            );

            $queryRevistas = new WP_Query($args);
            
            if($queryRevistas -> have_posts() ) :
              
                while($queryRevistas -> have_posts()) : 
                    $queryRevistas -> the_post(); 

                    
        ?>

        <div class="revista mx-auto">

            <!-- <a href=" <?php get_field(url_edicao) ?> ">
                <img id="img-revista" class="p-3" src=" 
            <?php  
              //  if(has_post_thumbnail()) :
               //     the_post_thumbnail_url();
                //endif;
            ?> 
             " />
            </a> -->

            <?php if(get_field(imagem_edicao)) :  ?>
            <a href=" <?php get_field(url_edicao) ?> ">
                <img src=" <?php the_field(imagem_edicao); ?>" class="img-revista p-3" />
            </a>
            <?php endif; ?>

            <h6 class="titulo-revista text-uppercase font-weight-bold px-3 mb-0">
                <?php
                if(get_field(nome_edicao)) :
                    the_field(nome_edicao);
                endif;
            ?>
            </h6>

            <h6 class="descricao-revista text-truncate px-3">
                <?php
                if(get_field(descricao_edicao)) :
                    the_field(descricao_edicao);
                endif;
            ?>
            </h6>

        </div>

        <?php
                endwhile;           
            endif;       

            wp_reset_postdata();
        ?>

    </div>

</div>

<div class="container my-5 mx-auto">
    <div id="ver-mais" class="row d-flex justify-align-center py-2">
        <a id="btn-vermais" href="#ver-mais" class="col-lg-2 col-4 mx-auto btn"> VER
            MAIS </a>
    </div>
</div>

<?php get_footer(); ?>