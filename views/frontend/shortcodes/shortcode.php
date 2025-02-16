<?php
use com\cminds\listmanager\plugin\frontend\walkers\CategoryWalker;
use com\cminds\listmanager\plugin\taxonomies\CategoryTaxonomy;
use com\cminds\listmanager\plugin\options\Options;
?>
<div class="cmlm">
    <div class="cmlm-filter">
        <?php
        $cat_terms = get_terms(CategoryTaxonomy::TAXONOMY, array(
            'hide_empty' => FALSE
        ));
        $cat_term_id_arr = array_map(function($x) {
            return $x->term_id;
        }, (array) $cat_terms);
        $cat_term_id_arr[] = -1;
        ?>
    </div>
    <div class="cmlm-content">
        <?php
        wp_list_categories(array(
            'hide_empty' => FALSE,
            'hierarchical' => TRUE,
            'title_li' => NULL,
            'include' => $cat_term_id_arr,
            'taxonomy' => CategoryTaxonomy::TAXONOMY,
            'walker' => new CategoryWalker()
        ));
        ?>
    </div>
</div>
<style>
<?php if (Options::getOption('category_font_size')): ?>
    .cmlm .cmlm-header { font-size: <?php echo Options::getOption('category_font_size'); ?> !important; }
<?php endif; ?>
<?php if (Options::getOption('link_font_size')): ?>
    .cmlm .cmlm-link { font-size: <?php echo Options::getOption('link_font_size'); ?> !important; }
<?php endif; ?>
</style>