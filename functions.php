<?
  function load_default_styles() {
    wp_enqueue_style('defaults', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'load_default_styles');

  function load_styles($page) {
    echo("loadstyles\r\n");
    $root = get_template_directory_uri();
    wp_enqueue_style('style', "$root/styles/css/$page.css");
  }
?>
