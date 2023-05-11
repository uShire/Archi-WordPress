<?php
    $post_type= get_field('post_type');
?>


<section class="get-qoute">
    <div class="container">
    <ul>
        <?php 
         $query = new WP_Query(array(
            'post_type' => $post_type,
            'post_per_page' => 3,
         ))
        
        ?>
    <?php
        if($query->have_posts()) : while($query->have_posts()) : $query->the_post();?> 
           <li><?php the_title();?></li> 
    <?php endwhile;
        else:
        echo "No information to show";
        endif;
    ?>
        
            
        </ul>
    </div>
</section>