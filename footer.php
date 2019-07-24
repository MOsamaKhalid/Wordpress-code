<footer class="site_footer">

	<nav class="site-nav">

		<?php

				$args =array('theme_loaction' => 'footer');
			?>

			<?php wp_nav_menu( $args ); ?>
			
		</nav>

	<p><?php bloginfo('name');?> - &copy; <?php echo date('Y'); ?></p>
</footer>
</div> <!--Container-->
<?php wp_footer();?>
</body>
</html> 