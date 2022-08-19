<?php get_header(); ?>

<!-- begin wrapper -->
<div id="hero">
     <img src="<?php echo get_template_directory_uri() ; ?>/images/header-home-inner.jpg" alt="homeinner">       
</div>
<div id="wrapper">
    <main>
    <!-- if we dont have posts... -->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ;?>
        <!-- title names -->
        <article class="post">
        <h2 class="title" > 
        
        <?php the_title() ; ?>
    
        </h2> 
        <!-- description -->
        <div class="meta">
        <span><b>Posted by</b> <?php the_author() ; ?></span>
        <span><b>Posted on</b> <?php the_time('F j, Y g:i a') ; ?></span>
        </div>
        <!-- image -->
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail() ; ?>
        <?php endif ?>
        <!-- end image -->
        <!-- read more link -->
        <?php the_content() ; ?>
        

        </article>
        <?php endwhile ; ?>
        <?php else : ?>
        <h2>
        <?php wpautop('Sorry, no posts were found!') ; ?>
        </h2>
        <?php endif ; ?>
        


    </main>
    <?php get_sidebar() ; ?>

</div>


<!-- end wrapper -->
<?php get_footer(); ?>