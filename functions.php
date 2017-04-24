<?
  function load_default_styles() {
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('defaults', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'load_default_styles');

  function load_styles($page) {
    echo("loadstyles\r\n");
    $root = get_template_directory_uri();
    wp_enqueue_style('style', "$root/styles/compiled-css/$page.css");
  }
?>
