<?php get_header(); 
/* Template Name: Contact page */
?>




<!-- the index.php is assign to the blog page -->
<!-- begin wrapper -->
<div id="hero">
     <img src="<?php echo get_template_directory_uri() ; ?>/images/header-home-inner.jpg" alt="homeinner">       
</div>

<div id="wrapper">

<!-- if we dont have posts... -->
<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ;?>
        <?php the_content() ; ?>
        <?php endwhile ; ?>
        <?php else : ?>
        <h2>
        <?php wpautop('Sorry, no posts were found!') ; ?>
        </h2>
        <?php endif ; ?>




</div>
<!-- end wrapper -->
<?php get_footer(); ?>    