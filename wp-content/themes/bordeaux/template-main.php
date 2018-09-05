<?php
/*
Template Name: main
Template Post Type: post, page, event
*/
get_header();
?>


<div id="primary" class="content-area">
  <main id="main" class="site-main">
      <?php


      $args = array( 'posts_per_page' => 4,
                    'category' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',);

         $myposts = get_posts($args);
         // print_r($myposts)

         // var_dump($myposts);
      ?>
      <section class="actualite">

      <?php foreach ($myposts as $postAct): ?>
      <div class="">
          <a href="#">

          <h3><?php echo $postAct->post_title ?></h3>
          <img src="<?php echo  get_the_post_thumbnail_url($postAct->ID) ?>" alt="">
          <p> <?php echo substr($postAct->post_content, 0, 100) ?> ...</p>
        </a>
      </div>

  <?php endforeach // End of the loop.s ?>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<br>
<br>


<?php
get_footer();
?>
