<footer class="main-footer">
	<?php if (ENVIRONMENT=='development'): ?>
		<div class="pull-right hidden-xs">
			<!-- CI Bootstrap Version: <strong><?php echo CI_BOOTSTRAP_VERSION; ?></strong>, -->
			Server Info,
			CI Version: <strong><?php echo CI_VERSION; ?></strong>, 
			Elapsed Time: <strong>{elapsed_time}</strong> seconds, 
			Memory Usage: <strong>{memory_usage}</strong>
		</div>
	<?php endif; ?>
	<strong>&copy; <?php echo date('Y'); ?></strong>&nbsp;<a href="http://alphamedia.id" target="_blank">Alpha Media Consultant</a> - All rights reserved.
</footer>