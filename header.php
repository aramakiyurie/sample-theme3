<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ) ?>">
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

  <header>
    <h1>
      <a href="index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" width="268" height="64" alt="日本の景色写真展">
      </a>
    </h1>
  </header>
	

  <nav class="nav">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary2'
				)
			);
		?>
  </nav>
