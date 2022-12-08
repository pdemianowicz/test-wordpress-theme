</main>
	<?php if (function_exists("lc_custom_footer")) lc_custom_footer(); else {
		?>
		<?php if (is_active_sidebar( 'footerfull' )): ?>
		<div class="wrapper bg-light mt-5 py-5" id="wrapper-footer-widgets">
			
			<div class="container mb-5">
				
				<div class="row">
					<?php dynamic_sidebar( 'footerfull' ); ?>
				</div>

			</div>
		</div>
		<?php endif ?>
		

		<footer class="site-footer" id="colophon">
			<div class="container">
				<div class="site-info"></div>
				<div class="site-footer-bottom">

						<p>Copyright © 2022<span>|</span></p>
						<p><a href="#">Polityka prywatności</a><span>|</span></p>
						<p><a href="#">Kontakt</a><span>|</span></p>
						<p><a href="#">Współpraca</a></p>

				</div>
			</div>
		</footer>


	<?php 
	} //END ELSE CASE ?>


	<?php wp_footer(); ?>
	</body>
</html>

