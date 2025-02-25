<?php get_header(); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
    <h1 class="page-title"><?php the_title(); ?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
    <h1 class="page-title"><?php the_title(); ?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4"> 
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
    <p class="verde"> <?php the_content(); ?></p>
    <?php endwhile; else : ?>
        <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>