<footer id="footer">
	<div class="copyright">
	<?php 
		$copyright = 'Design by phongdat';
		echo apply_filters('phongdat_copyright', $copyright); //tạo filter hook la phongdat_copyright
	?>
	Copyright &copy <?php echo date('Y'); ?> - <?php echo get_bloginfo('sitename'); ?>
	</div>
</div>
</div><!-- dong #container o file heade.php-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/bootstrap-1.12.4.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.min.js"></script>

</body>
</html>