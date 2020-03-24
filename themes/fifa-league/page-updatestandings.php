<?php get_header(); ?>
<div class="update-standings">

    <form class="team-1">
        <select class="select-1">
        <?php
            $args = array( 
                'post_type' => 'post', 
                'order' => 'DSC',
          
                'cat' => '3',
                'numberposts' => 12
                
                );
            $product_posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                <option value="<?php the_id()?>"
                id="team-name-1"><?php the_title()?></option>
            <?php endforeach?>
        </select>
        <label for="gf-1">Score</label>
        <input type="text" id="gf-1">

        <p>vs</p>

        <select class="select-2">
        <?php
            $args = array( 
                'post_type' => 'post', 
                'order' => 'ASC',
                'cat' => '3'
                );
            $product_posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
            <option value="<?php the_id()?>"
            id="team-name-1"><?php the_title()?></option>
            <?php the_title()?></option>
            <?php endforeach?>
        </select>
        <label for="gf-2">Score</label>
        <input type="text" id="gf-2">

        <p class="result">Winner:</p>

        <button id="submit">Submit</button>
        


    </form>



</div> 
<?php get_footer();?>
