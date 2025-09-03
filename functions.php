<?php
// import main, and 
wp_enqueue_style("main-css", get_template_directory_uri() . '/css/main.css');
wp_enqueue_style("footer-css", get_template_directory_uri() . '/css/footer.css');
wp_enqueue_style("header-css", get_template_directory_uri() . '/css/header.css');



add_action('admin_menu', 'company_settings');


function company_settings()
{
    add_menu_page(
        'company settings',       // Page title
        'company settings',          // Menu title
        'manage_options',       // Capability (who can see it)
        'my-custom-page',       // Menu slug
        'company_settings_HTML',  // Callback function to render content
        80                      // Position in the menu
    );
}


function company_settings_HTML()
{
    if (!current_user_can('manage_options')) {
        return;
    }
?>
    <div class="wrap">
        <h1>Welcome to My Custom Page</h1>
        <p>This is where you can add custom admin functionality.</p>
    </div>
<?php
}
