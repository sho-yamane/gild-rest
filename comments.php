<?php
  if ( post_password_required() ) {
    return;
  }
?>

<div class="post-comments" id="comments">

	<?php if ( have_comments() ) : ?>

    <ul class="comment-tabs" id="is-comment-tabs">
      <li class="active">
        <i class="fa fa-comments-o"></i>
        <?php _e('Comments', 'gildrest'); ?>
        <span>
          <?php
            echo $commentcount = get_comments( array(
              'status' => 'approve',
              'post_id'=> get_the_ID(),
              'type'=> 'comment',
              'count' => true
          ) );
          ?>
        </span>
      </li>
      <li>
        <i class="fa fa-share"></i>
        <?php _e('Pingbacks', 'gildrest'); ?>
        <span>
          <?php
            echo $commentcount = get_comments( array(
              'status' => 'approve',
              'post_id'=> get_the_ID(),
              'type'=> 'pings',
              'count' => true
          ) );
          ?>
        </span>
      </li>
    </ul>

    <div id="is-comment-list" class="comment-list-container">
      <ol class="active">
        <?php
          wp_list_comments( array(
            'type'       => 'comment',
            'style'      => 'ol',
            'short_ping' => true,
            'callback'   => 'gildrest_comment'
          ) );
        ?>
      </ol>
      <ol class="hide">
        <?php
          wp_list_comments( array(
            'type'       => 'pings',
            'style'      => 'ol',
            'short_ping' => true
          ) );
        ?>
      </ol>
    </div>


    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav class="comment-navigation" id="comment-nav-above">
        <?php if ( get_previous_comments_link() ) : ?>
          <div class="nav-previous">
            <?php
              previous_comments_link(__(
                '&larr; Older Comments',
                'gildrest'
              ));
            ?>
          </div>
        <?php endif; ?>
        <?php if ( get_next_comments_link() ) : ?>
          <div class="nav-next">
            <?php
              next_comments_link(__(
                'Newer Comments &rarr;',
                'gildrest'
              ));
            ?>
          </div>
        <?php endif; ?>
      </nav>
    <?php endif; ?>


	<?php endif; ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e('Comments are closed.', 'gildrest'); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div>
