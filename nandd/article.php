<?php theme_include('header'); ?>
		<div class="posts">
			<article>
				<h1>
					<div class="date"><?php echo article_date(); ?></div>
					<a href="#"><?php echo article_title(); ?></a>
				</h1>
				
				<?php echo article_markdown(); ?>
				
				<div class="tags"> Tags: - 
					<?php while(categories()): ?>
						<?php echo category_description(); ?> -
					<?php endwhile; ?>	
				</div>
			</article>

<!--	Comment form, still in the works

			<?php if(comments_open() and has_comments()): ?>
			<div class="comment">
			<?php while(comments()): ?>
				<div class="blurb">
					<h2 class="cname"><?php echo comments_name(); ?></h2>
					<div class="ctime"><?php        
											$timestamp = comment_time();
											echo gmdate("g:i A", $timestamp);
										?>
					</div>
					<?php echo comments_text(); ?>
				</div>
				<?php endwhile; ?>	

				
			
			</div>
			<?php endif; ?> 
-->
		</div>
		<footer>
<?php theme_include('footer'); ?>