<a class="link-items__service" href="<?php the_permalink(); ?>">
  <div class="link-items__service-wrapper">
    <?php if (has_post_thumbnail()) : ?>
      <img class="link-items__service-img _img"
           src="<?php the_post_thumbnail_url('medium'); ?>"
           alt="<?php echo esc_attr(get_the_title()); ?>">
    <?php else : ?>
      <img class="link-items__service-img _img"
           src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-1.webp"
           alt="placeholder">
    <?php endif; ?>
  </div>
  <div class="link-items__service-info">
    <h4 class="link-items__service-text">
      <?php the_title(); ?>
    </h4>
    <div class="link-items__service-btn _gray-btn left-btn">
      <span>Перейти к прочтению</span>
    </div>
  </div>
</a>
