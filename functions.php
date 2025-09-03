<?php
// import main, and 
add_action('wp_enqueue_scripts', function () {
    // Enqueue your CSS files
    wp_enqueue_style("main-css", get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style("footer-css", get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style("header-css", get_template_directory_uri() . '/css/header.css');

    // Get saved colors (with defaults)
    $background_color = get_option('company_background_color', '#000000');
    $link_color = get_option('company_link_color', '#ffffff');
    $button_color = get_option('company_button_color', '#ffffff');
    $bottom_color = get_option('company_bottom_color', '#ffffff');
    $top_color = get_option('company_top_color', '#ffffff');
    $text_color = get_option('company_text_color', '#ffffff');
    $title_color = get_option('company_title_color', '#ffffff');




    // Build dynamic CSS variables
    $custom_css = "
        :root {
            --background-color: {$background_color};
            --link-color: {$link_color};
            --button-color: {$button_color};
            --bottom-color: {$bottom_color};
            --top-color: {$top_color};
            --text-color: {$text_color};
            --title-color: {$title_color};

        }
    ";

    // Attach them after main-css
    wp_add_inline_style('main-css', $custom_css);
});

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
        <h1>Company Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('company_settings_group');
            do_settings_sections('company_settings_group');
            ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Background color</th>
                    <td>
                        <input type="color"
                            name="company_background_color"
                            value="<?php echo esc_attr(get_option('company_background_color', '#333333')); ?>">
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Secondary color</th>
                    <td>
                        <input type="color"
                            name="company_button_color"
                            value="<?php echo esc_attr(get_option('company_button_color', '#ffffff')); ?>">
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Link color</th>
                    <td>
                        <input type="color"
                            name="company_link_color"
                            value="<?php echo esc_attr(get_option('company_link_color', '#ffffff')); ?>">
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Top color</th>
                    <td>
                        <input type="color"
                            name="company_top_color"
                            value="<?php echo esc_attr(get_option('company_top_color', '#ffffff')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Botom color</th>
                    <td>
                        <input type="color"
                            name="company_bottom_color"
                            value="<?php echo esc_attr(get_option('company_bottom_color', '#ffffff')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Text color</th>
                    <td>
                        <input type="color"
                            name="company_text_color"
                            value="<?php echo esc_attr(get_option('company_text_color', '#ffffff')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Title color</th>
                    <td>
                        <input type="color"
                            name="company_title_color"
                            value="<?php echo esc_attr(get_option('company_title_color', '#ffffff')); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Welkomst titel</th>
                    <td>
                        <input type="text"
                            name="company_welcome_title"
                            value="<?php echo esc_attr(get_option('company_welcome_title', '')); ?>"
                            placeholder="Vul hier uw welkomst titel in">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Welkomst paragraaf</th>
                    <td>
                        <textarea
                            name="company_welcome_text"
                            rows="5"
                            cols="10"
                            placeholder="Vul hier uw welkomst text in"
                            class="large-text"><?php echo esc_textarea(get_option('company_welcome_text', '')); ?></textarea>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">2e text titel</th>
                    <td>
                        <input type="text"
                            name="company_second_title"
                            value="<?php echo esc_attr(get_option('company_second_title', '')); ?>"
                            placeholder="Vul hier uw welkomst titel in">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">2e text paragraaf</th>
                    <td>
                        <textarea
                            name="company_second_text"
                            rows="5"
                            cols="10"
                            placeholder="Vul hier uw welkomst text in"
                            class="large-text"><?php echo esc_textarea(get_option('company_second_text', '')); ?></textarea>
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}

add_action('admin_init', function () {
    register_setting('company_settings_group', 'company_background_color');
    register_setting('company_settings_group', 'company_button_color');
    register_setting('company_settings_group', 'company_link_color');
    register_setting('company_settings_group', 'company_top_color');
    register_setting('company_settings_group', 'company_bottom_color');
    register_setting('company_settings_group', 'company_text_color');
    register_setting('company_settings_group', 'company_welcome_title');
    register_setting('company_settings_group', 'company_welcome_text');
    register_setting('company_settings_group', 'company_second_title');
    register_setting('company_settings_group', 'company_second_text');
});


add_action('admin_menu', 'company_settings');
