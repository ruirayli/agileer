<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="/favicon.ico" >
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/css/agileer.css">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if(!defined("HOMEPAGE")) {wp_head();} ?>
</head>

<?php
  $menu_map = array('homepage' => array('url' => BASE_PATH, 'class' => set_menu_active("homepage")),
                    'blog' => array('url' => BASE_PATH . "blog/", 'class' => set_menu_active("blog")),
                    'contact' => array('url' => $contact_url, 'class' => set_menu_active("contact")));

  function set_menu_active($type = "blog"){      
    $this_page = $_SERVER["REQUEST_URI"];
    if (strpos($this_page, "?") !== false){
       $this_page = reset(explode("?", $this_page));
    } 
    $active = false;
    switch ($type) {
      case 'homepage':
        if($this_page == '/'){
          $active = true;
        }
        break;  
      case 'blog':
        if(strpos($this_page, "/blog/") !== false){
          $active = true;
        }
        break;     
      default:
        if(strpos($this_page, "/blog/contact") !== false){
          $active = true;
        }
        break;
    }
    return  $active ? "active" : "";  
  }
  
?>

<body <?php if(!defined("HOMEPAGE")) {body_class();} ?>>
<div id="page" class="<?PHP if(!defined("HOMEPAGE")) {echo "hfeed site";} ?>" style="<?php if(!defined("HOMEPAGE")) {echo "margin-top:78px;";} ?>">
  <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="brand img-circle" href="<?php echo $menu_map['homepage']['url'];?>"><span style="margin-left:34px;">Agiler</span></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse" style="margin-left:99px;">
              <ul class="nav">
                <li class="<?php echo $menu_map['homepage']['class'];?>"><a href="<?php echo $menu_map['homepage']['url'];?>">主页</a></li>
                <li class="<?php echo $menu_map['blog']['class'];?>"><a href="<?php echo $menu_map['blog']['url'];?>">博客</a></li>
                <li class="<?php echo $menu_map['contact']['class'];?>"><a href="<?php echo $menu_map['contact']['url'];?>">联系我</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">百宝箱 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">抽奖</a></li>
                    <li><a href="#">实验室</a></li>
                    <li><a href="#">网络收藏夹</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">友情链接</li>
                    <li><a href="http://tieniuzai.com/" target="_blank">铁牛仔</a></li>
                    <li><a href="http://ifxoxo.com/" target="_blank">ifxoxo</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

  <div id="main" class="wrapper">
