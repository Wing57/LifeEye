
<?php 
function wq_nav()
{
    register_nav_menus(
        array(
            'primary' => _('主导航', 'wq'),
            'secendary' => _('副导航', 'wq')
        )
    );
}
add_action('init', 'wq_nav');


function wq_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));
    add_theme_support('custom-header');
    add_theme_support('custom-background');
}
add_action('after_setup', 'wq_setup');
?>