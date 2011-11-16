<?php
/**
 * Template Name: HOME DYNAMIC
 *
 */
// search handler
if ($_GET['stype']) {
	if ($_GET['stype'] == "content") {
		header("Location: http://search.creativecommons.org/?q=" . $_GET['q']);
	} else {
		header("Location: /?s=" . $_GET['q']);
	}
}
?>
<?php get_header(); ?>
<?php // the_post(); ?>
<body>
	<div id="container">
        <?php include 'page-nav.php'; ?>

        <div id="main" role="main">
            <div class="container">
                <div class="sixteen columns">
                <?php 
                    if ( $_SERVER["REQUEST_URI"] == '/' ||
                         $_SERVER["REQUEST_URI"] == '/index.php' || 
                         $_SERVER["REQUEST_URI"] == '/homedev/index.php' ||
                         $_SERVER["REQUEST_URI"] == '/homedev' ) {
                            include 'home-gestalt.php'; 

                    } else { 

			            the_content();
			            edit_post_link("Edit This Page", '<p class="edit">', 
                                       '</p>');
                    } 
                ?>

                </div>
            </div><!--! end of .container -->
		</div><!--! end of #main -->

<?php get_footer(); ?>

