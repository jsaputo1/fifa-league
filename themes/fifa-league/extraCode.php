<?php get_header(); ?>
<section class="fixture-page">

    <div class="fixture-menu">
        <ul>
            <li>Group A</li>
            <li class="dash">|</li>
            <li id="selectedGroup">Group B</li>
        </ul>   
    </div>




    <!-- Group B Fixtures -->

    <!-- G= 48, Joe = 36, Carlos = 34, Mass = 29, John = 10 -->
    
    <div class="group-b-fixtures">
        <div class="matchup">
            <div class="teams">

                <!--  G  -->
                <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                '48' 
                ); $product_posts = get_posts( $args );?>
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                <p class="team-name1-fixtures" 
                id="loser"
                ><a href="<?php the_permalink()?>"><?php the_post_thumbnail() ?><?php the_title()?></a></p>
                <?php endforeach?>
                
                <!-- Joe -->
                <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                '36' 
                ); $product_posts = get_posts( $args );?>
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                <p class="team-name1-fixtures"
                id=""
                ><a href="<?php the_permalink()?>"><?php the_post_thumbnail() ?><?php the_title()?></a></p>
                <?php endforeach?>

            </div>
            <div class="score">
                <p>0</p>
                <p>0</p>
            </div>
            <div class="final">
                <p>Final</p>
            </div>
        </div><hr>
        
    </div>
</section>
<?php get_footer();?>

