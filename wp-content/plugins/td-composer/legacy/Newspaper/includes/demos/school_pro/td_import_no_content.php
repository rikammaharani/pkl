<?php
// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_9');

// login background
td_demo_misc::update_background_login('td_pic_1');

/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/

$template_header_overlay_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header - School PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));


$template_header_main_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Main - School PRO',
    'file' => 'header_cloud_template_main.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_main_school_pro_id);


$template_footer_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer - School PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_school_pro_id);


$template_single_post_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post - School PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_school_pro_id);


$template_category_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category - School PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_school_pro_id);


$template_404_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => '404 - School PRO',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_school_pro_id);


$template_author_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author - School PRO',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_school_pro_id);


$template_search_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search - School PRO',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_school_pro_id);


$template_tag_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag - School PRO',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_school_pro_id);


$template_date_school_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date - School PRO',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_school_pro_id);


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'header_template_id' => $template_header_overlay_school_pro_id,
    'homepage' => true,
));