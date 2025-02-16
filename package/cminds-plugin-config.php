<?php
ob_start();
include plugin_dir_path(__FILE__) . 'views/plugin_compare_table.php';
$plugin_compare_table = ob_get_contents();
ob_end_clean();
$cminds_plugin_config = array(
    'plugin-is-pro' => FALSE,
    'plugin-has-addons' => FALSE,
    'plugin-version' => com\cminds\listmanager\App::VERSION,
    'plugin-abbrev' => com\cminds\listmanager\App::PREFIX,
    'plugin-short-slug' => com\cminds\listmanager\App::SLUG,
    'plugin-parent-short-slug' => '',
	'plugin-redirect-after-install'	 => admin_url( 'admin.php?page=cmlm-options' ),
    'plugin-show-guide'              => TRUE,
    'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Introduction to curated list manager', 'video_time' => '0:00' ),
        array( 'title' => 'Search and filter main list', 'video_time' => '0:35' ),
        array( 'title' => 'Filter list by category', 'video_time' => '0:55' ),
        array( 'title' => 'Tooltip support with additional information', 'video_time' => '1:03' ),
        array( 'title' => 'Checkbox support', 'video_time' => '1:15' ),
        array( 'title' => 'Tags support', 'video_time' => '1:27' ),
        array( 'title' => 'Advanced configuration options', 'video_time' => '1:45' ),
        array( 'title' => 'Advanced apperance options', 'video_time' => '2:00' ),
    ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Curated List Premium Features', 'video_id' => '173797080' ),
    ),
    'plugin-guide-text'              => '    <div style="display:block">
        <ol>
            <li>Go to <strong>"Categories"</strong> under the CM List Manager menu</li>
            <li>Add as many categories as needed</li>
            <li>Go to <strong>"Links"</strong> under the CM List Manager menu</li>
            <li>Add as many links as needed while assigning each one of them to a category</li>
            <li>Place the shortcode [cm_list_manager] in any post or page.</li>
            <li><strong>View</strong> this post or page to see the curated list created</li>
        </ol>
    </div>',
    'plugin-guide-video-height'      => 240,
    'plugin-guide-videos'            => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '164061177' ),
    ),
    'plugin-file' => com\cminds\listmanager\App::PLUGIN_FILE,
    'plugin-dir-path' => plugin_dir_path(com\cminds\listmanager\App::PLUGIN_FILE),
    'plugin-dir-url' => plugin_dir_url(com\cminds\listmanager\App::PLUGIN_FILE),
    'plugin-basename' => plugin_basename(com\cminds\listmanager\App::PLUGIN_FILE),
    'plugin-icon' => '',
    'plugin-name' => com\cminds\listmanager\App::PLUGIN_NAME,
    'plugin-license-name' => com\cminds\listmanager\App::PLUGIN_NAME_EXTENDED,
    'plugin-slug' => '',
    'plugin-menu-item' => com\cminds\listmanager\App::SLUG,
    'plugin-textdomain' => com\cminds\listmanager\App::SLUG,
    'plugin-userguide-key' => '663-curated-list-manager-cmclm',
    'plugin-campign'       => '?utm_source=curatedlistfree&utm_campaign=freeupgrade',
    'plugin-store-url' => 'https://www.cminds.com/wordpress-plugins-library/curated-list-manager-and-knowledgebase-plugin-for-wordpress?utm_source=curatedlistfree&utm_campaign=freeupgrade&upgrade=1',
    'plugin-support-url' => '',
    'plugin-review-url' => '',
    'plugin-changelog-url' => 'https://www.cminds.com/wordpress-plugins-library/curated-list-manager-and-knowledgebase-plugin-for-wordpress/#changelog',
    'plugin-licensing-aliases' => array(com\cminds\listmanager\App::PLUGIN_NAME_EXTENDED),
    'plugin-compare-table'   => $plugin_compare_table,
);