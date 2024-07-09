<?php 
	$contactInfo = [
		'phone' => '0407 584 518',
		'email' => 'info@liquidgreen.com.au',
		'facebook' => '',
		'instagram' => 'liquidgreentas',
	]

?>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-forest-green py-24" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto flex flex-col-reverse md:flex-row md:justify-between gap-12 ">
		<div class="footer-col-left flex flex-col align-start md:w-[25%]">
			<div class="flex flex-col items-start mb-12 mt-4">
				<h3>What is hydroseeding?</h3>
				<a href="#" class="btn btn-empty">Download PDF</a>
			</div>
			<div class="flex flex-col items-start">
				<h3>Contact us</h3>
				<p class="uppercase pb-2 text-sm">Servicing Hobart greater area <br>and Southern Tasmania</p>
				<p class="uppercase pb-2 text-sm">Contact Sophie on <a href="tel:<?php echo $contactInfo['phone']; ?>"><?php echo $contactInfo['phone']; ?></a> <br>or <a href="mailto:<?php echo $contactInfo['email']; ?>"><?php echo $contactInfo['email']; ?></a></p>
			</div>
			<div class="flex items-start">
				<a href="https://facebook.com/<?php echo $contactInfo['facebook']; ?>" target="_blank" class="-ml-2"><i class='bx bxl-facebook'></i></a>
				<a href="https://instagram.com/<?php echo $contactInfo['instagram']; ?>" target="_blank"><i class='bx bxl-instagram'></i></a>
			</div>
		</div>
		<div class="footer-col-right md:w-[50%]">
			<?php echo do_shortcode('[wpforms id="10"]'); ?>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
