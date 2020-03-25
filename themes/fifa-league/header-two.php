<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

Header 2
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
    <header>

   
      <figure><img src="<?php echo get_template_directory_uri() . '/images/theleague-logo.png' ;?>"></figure>
      <ul>
        <li class="groups-menu" id="on-page">Groups</li></a>


        <li class="dash">|</li>
        <li class="fixtures-menu">Fixtures</li></a>
        <li class="dash">|</li>
        <li class=
        "<?php echo is_page(array('highlights')) ? 'on-page' : '' ;?>">Highlights</li></a>
      </ul>
    </header>

  