<div id="footer">
	<div class="wrap">
		<div class="columns two reverse">
			<div class="column first">
			<?php if ( has_nav_menu('footer') ) { ?>
				<?php wp_nav_menu( array('theme_location' => 'footer', 'container' => false) ); ?>
<?php } ?>
				
				<div class="newsletter">
					<?php echo do_shortcode('[contact-form-7 id="67" title="Newsletter (Footer)"]'); ?>
				</div>
				
				<ul class="social_media">
					<li class="facebook"><a href="https://www.facebook.com/Biteharder/" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
					<li class="youtube"><a href="https://www.youtube.com/channel/UCKM7CMfk7cdEnXqc2JAMEcQ" target="_blank" title="YouTube"><i class="icon-youtube"></i></a></li>
					<li class="twitter"><a href="https://twitter.com/biteharder" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>
					<li class="instagram"><a href="https://www.instagram.com/bitehardertool" target="_blank" title="Instagram"><i class="icon-instagram"></i></a></li>
					<li class="linkedin"><a href="https://www.linkedin.com/company/biteharder" target="_blank" title="Linkedin"><i class="icon-linkedin"></i></a></li>
					<li class="snapchat"><a href="https://www.snapchat.com/add/biteharder" target="_blank" title="SnapChat"><i class="icon-snapchat"></i></a></li>
				</ul>
				
				<div class="cleared"></div>
			</div>
			
			<div class="column second">
				<div class="columns three">
					<div class="column first">
						<h3><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo-img.png" alt="BiteHarder" width="117" height="24" class="logo" /></h3>
						
						<p>A division of<br /> Welch Manufacturing Technologies, Ltd.<br />
						ISO 9001:2008, AS 9100:2009</p>
					</div>
					
					<div class="column second">
						<h3>Headquarters</h3>
						
						<p>516 Province Road,<br />
						Laconia, NH<br />
						03246</p>
					</div>
					
					<div class="column third">
						<h3>Customer Support</h3>
						
						<ul class="contact_information">
							<li><a href="mailto:support@biteharder.com"><i class="icon-email"></i> support@biteharder.com</a></li>
							<li><i class="icon-phone"></i> 855-294-2483 (BITE)</li>
						</ul>
					</div>
					
					<div class="cleared"></div>
				</div>
			</div>
			
			<div class="cleared"></div>
		</div>
	</div>
</div>

<!-- wp_footer() -->
<?php wp_footer(); ?>
<!-- end wp_footer() -->

</div></body>
</html>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->