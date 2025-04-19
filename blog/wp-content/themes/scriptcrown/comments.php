<?php
// Do not delete these lines
	if(!empty($_SERVER['SCRIPT_FILENAME'])&& 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die('Please do not load this page directly. Thanks!');
	if(post_password_required()){?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
<style>
	.comment-content p {
		margin-bottom: 0 !important;
	}
	.reply {
		margin-bottom: 20px;
	}
</style>
<!-- You can start editing here. -->
<div id="comments">
	<?php if(have_comments()): ?>
		<!-- Post Comments Start -->
		<h4><?php comments_number('No Comments','One People Comment','% People Comments');?></h4>
		
		<div class="navigation" style="clear:both">
			<div class="alignleft"><?php previous_comments_link()?></div>
			<div class="alignright"><?php next_comments_link()?></div>
		</div>
		<div style="clear:both"></div>
		<ul class="commentlist comments mb-xl-30">
			<?php wp_list_comments('avatar_size=100&reply_text=Reply <i class="fal fa-long-arrow-right ml-2"></i>'); ?>
		</ul>
		<div class="navigation" style="clear:both">
			<div class="alignleft"><?php previous_comments_link()?></div>
			<div class="alignright"><?php next_comments_link()?></div>
		</div>
		<div style="clear:both"></div> <?php else : // this is displayed if there are no comments so far ?>
		<?php if('open' == $post->comment_status): ?>
			<!-- If comments are open,but there are no comments. -->
		<?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>
	<?php endif; ?>

	<?php if('open' == $post->comment_status): ?>
		<div id="respond" class="comment_form">
			<h3><?php comment_form_title('Leave a Reply','Leave a Reply to %s'); ?></h3>
			<div class="cancel-comment-reply">
				<small><?php cancel_comment_reply_link(); ?></small>
			</div>
			<?php if(get_option('comment_registration')&& !$user_ID): ?>
			post a comment.</p>
			<?php else : ?>
				<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="commentform">
					<?php if($user_ID): ?>
						<p>Logged in as <a href="<?php echo site_url(); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
					<?php else : ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="Your Full Name" class="form-control form-control-custom style_2" autocomplete="off">
									<i class="fal fa-user"></i>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="Your Email" class="form-control form-control-custom style_2" autocomplete="off">
									<i class="fal fa-envelope"></i>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea rows="5" name="comment" id="comment" placeholder="Write Message" class="form-control form-control-custom style_2" autocomplete="off"></textarea>
									<i class="fal fa-pen"></i>
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Send Comment <i class="fal fa-chevron-right ml-2"></i></button>
							</div>
						</div>
					<?php endif; ?>
					<?php comment_id_fields(); ?>
					</p>
					<?php do_action('comment_form',$post->ID); ?>
				</form>
			<?php endif; // If registration required and not logged in ?>
		</div>
	<?php endif; // if you delete this the sky will fall on your head ?>
</div>
