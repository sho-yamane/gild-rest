<?php

function gildrest_comment($comment, $args, $depth) { ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
    <div id="comment-<?php comment_ID(); ?>" class="comment-body">

      <div class="comment-left">
        <div class="comment-author-pic">
          <?php echo get_avatar($comment,$size='48'); ?>
        </div>
      </div>

      <div class="comment-right">

        <div class="comment-meta">
          <div class="comment-author-name">
            <?php printf(__('<cite class="fn">%s</cite>', 'gildrest'), get_comment_author_link()) ?>
          </div>
          <div class="comment-time">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
              <i class="fa fa-clock-o" aria-hidden="true"></i> <?php printf(__('%1$s at %2$s', 'gildrest'), get_comment_date(),  get_comment_time()) ?>
            </a>
          </div>
          <div class="comment-edit-link-container">
            <?php edit_comment_link(__('(Edit)', 'gildrest'),'  ','') ?>
          </div>
        </div>

        <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.', 'gildrest') ?></em>
        <?php endif; ?>


        <div class="comment-content">
          <?php comment_text() ?>
        </div>

        <div class="reply">
          <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>

      </div>
    </div>
  </li>
<?php }
