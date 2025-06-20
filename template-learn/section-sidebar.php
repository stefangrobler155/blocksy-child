<div class="learn-sidebar">
  <nav class="learn-nav">
    <ul>
      <?php
        $learn_posts = new WP_Query(array(
          'post_type' => 'learn',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ));

        while ($learn_posts->have_posts()) : $learn_posts->the_post();
          $active = (get_the_ID() === get_queried_object_id()) ? 'active' : '';
          echo '<li><a class="' . $active . '" href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        endwhile;
        wp_reset_postdata();
      ?>
    </ul>
  </nav>
</div>
