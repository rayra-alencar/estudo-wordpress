<?php
$field_1 = get_field_object(field_5df11c1bbdad7);
$field_2 = get_field_object(field_5df121a0c6cb4);
$field_3 = get_field_object(field_5df121a7c6cb5);

?>


<!-- LISTA -->
<div class="row col-3">
    <?php  if(have_posts()) :   ?>

    <ul class="list-group mx-auto">
        <p class="h6 text-dark"> Filtrar posts por </p>

        <li class="list-group-item">
            <?php  if(get_field(tag_1)) : ?>
            <a class="text-dark px-4" href=""> <?php echo $field_1['label'] ?> </a>
            <?php endif; ?>
        </li>

        <li class="list-group-item">
            <?php  if(get_field(tag_2)) : ?>
            <a class="text-dark px-4" href=""> <?php echo $field_2['label']  ?> </a>
            <?php endif; ?>
        </li>

        <li class="list-group-item">
            <?php  if(get_field(tag_3)) : ?>
            <a class="text-dark px-4" href=""> <?php echo $field_3['label'] ?> </a>
            <?php endif; ?>
        </li>

    </ul>

    <?php endif; ?>
</div>


<div class="row col-3">

    <ul class="list-ground">

        <?php if(has_tag()) : ?>
        <?php while(has_tag()) : ?>
        <li class="list-group-item">
            <?php the_tags() ?>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>

    </ul>

</div>