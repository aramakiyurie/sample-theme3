<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ) ?>">
<title>日本の景色写真展</title>
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
    <ul>
      <li><a href="introduction.html">展覧会について</a></li>
      <li><a href="schedule.html">スケジュール</a></li>
      <li><a href="gallery.html">作品紹介</a></li>
      <li><a href="tickets.html">前売り券申し込み</a></li>
    </ul>
  </nav>
