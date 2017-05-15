<?php
  /*
  Template Name: slider
  Template URI: https://github.com/kakoi-to-pirat/wp-slider.git
  Version: 0.0.1
  Author URI: https://github.com/kakoi-to-pirat

  для сортирвки по мета-полю указать:
   'meta_key'=>'название поля'
   'orderby' => 'meta_value_num'
  */


  global $post;
  $args = array( 'numberposts' => -1, 'post_type' => 'slider', 'meta_key'=>'position', 'orderby' => 'meta_value_num', 'order' => 'ASC' );
  $slider_posts = get_posts( $args );
?>

<!-- шаблон слайдера -->

<div class="slider">
  <div id="owl">
    <?php
      foreach( $slider_posts as $post ){
        setup_postdata($post);

        // получить src всех картинок, прикрепдленных к посту из медиафайлов (cтандартынми средствами WP)
          //preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post->post_content, $matches );
          //$metas = get_post_meta($post->ID, 'link', true);
        //получить src только первой картинку
          //$image_src  = $matches [1] [0];

        //используем плагин Advanced Custom Fields
        if (!empty(get_field('external_link', $post_id)))
          $slider_href = get_field('external_link', $post_id);
        else
          $slider_href = get_field('link', $post_id);
        $slider_target = get_field('target', $post_id);
        $slider_image_src = get_field('image_src', $post_id);
        ?>

        <!-- шаблон для одной картинки слайдера-->
        <div class="item">
          <a href="<?php echo $slider_href; ?>" target="<?php echo $slider_target; ?>">
            <img class="lazyOwl" data-src="<?php echo ($slider_image_src); ?>" src="" alt="Презентационный слайдер" />
          </a>
        </div>


      <?php
      //var_dump(get_post_meta($post->ID, 'position'));
      }
      wp_reset_postdata();
    ?>
  </div>
</div>