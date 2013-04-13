<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <?php roots_post_inside_before(); ?>
      <header>
    	<?php the_post_thumbnail('medium', array('class'=>'medium-thumb')); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php roots_entry_meta(); ?>
      </header>
      <div class="entry-content entry-content-single">
        <?php the_content(); ?>
      </div>
      <span style="display:block;clear:both;width:100%;"> </span>
      <?php comments_template(); ?>
      <?php roots_post_inside_after(); ?>
    </article>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>