<?php
/*
The comments page for Bones
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

  <?php if ( have_comments() ) : ?>





  
    <h2 id="comments-title"><?php comments_number();?></h2>

    <section class="commentlist">
      <?php
        wp_list_comments( array(
          'style'             => 'ul',
          'short_ping'        => true,
          'max_depth'         => '5',
          'avatar_size'       => 35,
          'callback'          => '',
          'type'              => 'all',
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => '',
          'format'            => 'html5'
        ) );
      ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav class="navigation comment-navigation" role="navigation">
      	<div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'bonestheme' ) ); ?></div>
      	<div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;', 'bonestheme' ) ); ?></div>
    	</nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php _e( 'Comments are closed.' , 'bonestheme' ); ?></p>
    <?php endif; ?>

  <?php endif; ?>

  <?php

  $args = array(
  'title_reply'       => __('¿Qué opinas?','bones-child'),
  'id_form'           => 'commentform',
  'class_form'        => 'comment-form form-group',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => '',
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'html5',
  'comment_field' =>  '<p class="comment-form-comment"><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',
  'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-md btn-info">%4$s</button>',
  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Nombre', 'bones-child' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

    'email'  => '<p class="comment-form-email">' .

                '<label for="email">' . __( 'Correo electrónico', 'bones-child' ) . '</label> ' .

                ( $req ? '<span>*</span>' : '' ) .

                '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

    'url'    => '' ) ),

    'comment_notes_after' => '',
);


  comment_form($args);


?>

