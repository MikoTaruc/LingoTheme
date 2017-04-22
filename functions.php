<?
  function load_styles($page) {
    echo("loadstyles\r\n");
    $root = get_template_directory_uri();
    wp_enqueue_style('style', "$root/styles/$page.css");
  }
?>
