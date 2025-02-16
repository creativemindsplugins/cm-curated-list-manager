<style type="text/css">
    .subsubsub li+li:before {content:'| ';}
</style>
<div id="CMLM_admin_nav">
    <ul class="subsubsub">
        <?php foreach ($submenus as $menu): ?>
            <li><a href="<?php echo esc_attr($menu['link']); ?>" target="<?php echo $menu['target']; ?>" <?php echo ($menu['current']) ? 'class="current"' : ''; ?>><?php echo esc_html($menu['title']); ?></a></li>
        <?php endforeach; ?>
    </ul>
    <br class="clear" />
</div>