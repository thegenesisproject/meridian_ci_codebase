
	<script src="<?php echo base_url('assets/foundation'); ?>/javascripts/modernizr.foundation.js"></script>

	<!-- Included Head.JS File -->
	<script src="<?php echo base_url('assets/js'); ?>/head.load.min.js"></script>

	<!-- Import all other JS files using HeadJS -->
	<script type="text/javascript">
	head.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.min.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.reveal.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.orbit-1.4.0.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.customforms.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.placeholder.min.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/jquery.tooltips.js")
		.js("<?php echo base_url('assets/foundation/'); ?>/javascripts/app.js");
	</script>
	<!-- End Combine and Compress These JS Files -->

</body>
</html>