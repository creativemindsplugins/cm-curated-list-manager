<?php
use com\cminds\listmanager\App;
?>
<div class="wrap">
    <h2><div id="icon-cmlm" class="icon32"><br /></div><?php echo App::PLUGIN_NAME_EXTENDED ?></h2>
	<?php echo $nav; ?>
	<div class="show_hide_pro_options" style="float:right;">
		<input onclick="jQuery('.onlyinpro').toggleClass('hide'); return false;" type="button" name="" value="Show/hide Pro options" class="button" />
	</div>
	<?php echo $content; ?>
</div>