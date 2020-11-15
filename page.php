<?php get_header(); ?>
<!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<div class="c-wrap">
  <div class="c-grid">
    <div class="p-contents">
      <?php
						if( have_posts() ) :
								while( have_posts() ) :
										the_post();
										?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php comments_template(); ?>
      </div>
      <?php endwhile;
						else :
								?><p>表示する記事がありません</p><?php
						endif;
					?>
    </div>
    <?php get_sidebar(); ?>
    <!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
  </div>
</div>
<?php get_footer(); ?>
<!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->