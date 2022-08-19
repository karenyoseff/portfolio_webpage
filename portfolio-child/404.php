<?php get_header(); ?>

<!-- begin wrapper --> 
<div id="wrapper">
    <!-- add wrong page image -->
    <main>

<h2>Page not found</h2>
    <p>It looks like nothing was found at this location. Maybe try another search?</p>
<?php get_search_form(); ?>
<p>Or, browse through our pages!  </p>
<?php wp_list_pages() ;?>
</main>

<?php get_sidebar() ; ?>


</div>


<!-- end wrapper -->
<?php get_footer(); ?>