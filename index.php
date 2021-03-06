

<?php

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'apiKey: e098ab7785d64b49a750d0cf92834dcb',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){
	   die("Connection Failure");
	   }
   curl_close($curl);
   return $result;
}
$type='business';
$get_data = callAPI('GET', 'http://newsapi.org/v2/top-headlines?category='.$type.'&country=in&apiKey=e098ab7785d64b49a750d0cf92834dcb', false);
$response = json_decode($get_data, true);
$status = $response['status'];
//$code = $response['code'];
//$message = $response['message'];
//echo $message;
$totalResults = $response['totalResults'];
$data = $response['articles'];
?>




<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link media="all" href="wp-content/cache/autoptimize/css/autoptimize_6cf332213a07ca21f7fe0a3bcdbd55d0.css" rel="stylesheet" />
<title>RSS News</title>
<link href="https://fonts.googleapis.com/css?family=Muli%3Aregular%2C400%2C700%2C900%7CMontserrat%3A700%2C400%2C900" rel="stylesheet">
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' /><link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Kyrill &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Kyrill &raquo; Comments Feed" href="comments/feed/index.html" /> 

			
<link rel='stylesheet' id='elementor-global-css'  href='wp-content/cache/autoptimize/css/autoptimize_single_2873f97031152db8ed58eb405fb86c2923a5.css?ver=1586254156' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-648-css'  href='wp-content/cache/autoptimize/css/autoptimize_single_7c2f7f6943017d081c8b7b3b6a588ccfaa68.css?ver=1586347975' type='text/css' media='all' />
<link rel='stylesheet' id='kyrill-fonts-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CMuli%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&amp;ver=1587049860' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMuli%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.4' type='text/css' media='all' /> 
<script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script> 
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<link rel='shortlink' href='index0ae0.html?p=648' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedad44.json?url=http%3A%2F%2Fkiwilab.co.nz%2Fpreview%2Fkyrill%2Fhome-4-2%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed5691?url=http%3A%2F%2Fkiwilab.co.nz%2Fpreview%2Fkyrill%2Fhome-4-2%2F&amp;format=xml" />
<link rel="icon" href="wp-content/uploads/2020/03/logo.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2020/03/logo.png" />
</head>
<body class="page-template page-template-template page-template-homepage-template page-template-templatehomepage-template-php page page-id-648 sidebar-active elementor-default elementor-kit-193 elementor-page elementor-page-648" >
<div id="preloader">
<div class="spinner">
</div>
</div>

<div class="body-inner-content">
<header class="header-area">

 <div class="logo-area"><div class="container">
 <div class="row align-items-center">
 <div class="col-md-3">
 <div class="logo">
 <a rel='home' class="logo" href="index.html"> 
 <img  class="img-fluid" src="wp-content/uploads/2020/03/logo-light.png" alt="Rss"> </a>
 </div></div>
 <div class="col-md-6">
 <div class="ad-banner"> <a href="http://www.google.com/"> <img src="wp-content/uploads/2020/04/add.png" class="img-ad" alt="Home"> </a>
 </div>
 </div>
 <div class="col-md-3 text-right">
 <ul class="top-social">
 <li class=""><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
 <li class=""><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
 <li class=""><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
 <li class=""><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="site-navigation nav-gradient header-two-style">
 <div class="nav-wrapper "><div class="container nav-wrapp"><div class="kyrill-responsive-menu"></div><div class="mainmenu">
 <div class="menu-main-nav-container">
 <ul id="primary-menu" class="menu">
 <li id="menu-item-195" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-195">
 <a href="index.php">Home</a></li>
 <li id="menu-item-195" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-195">
 <a href="category.php?type=health">Health</a></li>
  <li id="menu-item-195" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-195">
 <a href="category.php?type=politics">Politics</a></li>
 <li id="menu-item-195" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-195">
 <a href="category.php?type=science">Science</a></li>
 <li id="menu-item-196" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-196">
 <a href="category.php?type=general">General</a></li>
 <li id="menu-item-197" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-197">
 <a href="category.php?type=sports">Sports</a></li>
 <li id="menu-item-198" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-198">
 <a href="category.php?type=technology">Technology</a></li>
 <li id="menu-item-199" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-199">
 <a href="category.php?type=business">Business</a></li>
 <li id="menu-item-474" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-474">
 <a href="category.php?type=travel">Travel</a></li>
 <li id="menu-item-200" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-200">

 </li>
 </ul>
 </div></div>
</div></div></div>
</header>
 <div class="theme-page-content">
 <div data-elementor-type="wp-page" data-elementor-id="648" class="elementor elementor-648" data-elementor-settings="[]">
 <div class="elementor-inner">
 <div class="elementor-section-wrap">
<!-- <section class="elementor-element elementor-element-1d12fb5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="1d12fb5" data-element_type="section"><div class="elementor-container elementor-column-gap-default">
 <div class="elementor-row"><div class="elementor-element elementor-element-11866c7 elementor-column elementor-col-33 elementor-top-column" data-id="11866c7" data-element_type="column"><div class="elementor-column-wrap  elementor-element-populated">
 <div class="elementor-widget-wrap"><div class="elementor-element elementor-element-9528933 mb-last elementor-widget elementor-widget-newszone-post-grid" data-id="9528933" data-element_type="widget" data-widget_type="newszone-post-grid.default">
 <div class="elementor-widget-container"><div class="grid-item"><div class="post-layout-three">
 <div class="blog-post-wrapper ts-overlay-style"><div class="item item-before post-overlay" style="background-image:url(wp-content/uploads/2020/03/tech04.jpg)"> 
 <a class="img-link" href="the-secret-to-moving-this-ancient-sphinx-screening/index.html"></a>
 <div class="grid-overlay-content"><div class="post-content">
 <div class="grid-category"></div><h3 class="post-title"> <a href="the-secret-to-moving-this-ancient-sphinx-screening/index.html">The secret to moving this ancient sphinx</a></h3>
 <ul class="post-meta-info ts-avatar-container ">
 <li class="post-author"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' />
 <a href="author/admin/index.html">Millie</a></li><li> <i class="fa fa-clock-o"></i> Mar 28, 2020</li></ul></div></div></div></div></div></div></div></div><div class="elementor-element elementor-element-5fd009b mb-last elementor-widget elementor-widget-newszone-post-grid" data-id="5fd009b" data-element_type="widget" data-widget_type="newszone-post-grid.default"><div class="elementor-widget-container"><div class="grid-item"><div class="post-layout-three"><div class="blog-post-wrapper ts-overlay-style"><div class="item item-before post-overlay" style="background-image:url(wp-content/uploads/2020/03/listening-music.jpg)"> <a class="img-link" href="ratcliffe-to-be-director-of-nation-talent-trump-ignored/index.html"></a><div class="grid-overlay-content"><div class="post-content"><div class="grid-category"></div><h3 class="post-title"> <a href="ratcliffe-to-be-director-of-nation-talent-trump-ignored/index.html">6 Ways to Instantly Improve your Ui</a></h3><ul class="post-meta-info ts-avatar-container "><li class="post-author"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' /><a href="author/admin/index.html">Millie</a></li><li> <i class="fa fa-clock-o"></i> Mar 28, 2020</li></ul></div></div></div></div></div></div></div></div></div></div></div><div class="elementor-element elementor-element-0d0b338 elementor-column elementor-col-33 elementor-top-column" data-id="0d0b338" data-element_type="column"><div class="elementor-column-wrap  elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-4970d83 elementor-widget elementor-widget-newszone-main-slider" data-id="4970d83" data-element_type="widget" data-widget_type="newszone-main-slider.default"><div class="elementor-widget-container"><div class="main-slider owl-carousel"><div class="post-layout-three"><div class="blog-post-wrapper ts-overlay-style"><div class="item item-before post-overlay" style="background-image:url(wp-content/uploads/2020/03/fashion-girls.jpg)">
 <a class="img-link" href="the-billionaire-philan-thropist-read-to-learn-more-and-city/index.html"></a>
 <div class="grid-overlay-content"><div class="post-content">
 <div class="grid-category"><div class="post-trend"></div>
 <a class="post-cat" href="category/fashion/index.html" style="background-color:#ff3a3a;color:#ffffff"> Fashion </a>
 </div><h4 class="post-title">
 <a href="the-billionaire-philan-thropist-read-to-learn-more-and-city/index.html" rel="bookmark" title="3 Technology Basics You Reviewing Constantly.">3 Technology Basics You Reviewing Constantly.</a></h4><ul class="post-meta-info ts-avatar-container "><li class="post-author"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' /><a href="author/admin/index.html">Millie</a></li><li> <i class="fa fa-clock-o"></i> Mar 28, 2020</li><li class="active"> <i class="icofont-fire"></i> 88</li></ul></div></div></div></div></div></div></div></div></div></div></div><div class="elementor-element elementor-element-6d23305 elementor-column elementor-col-33 elementor-top-column" data-id="6d23305" data-element_type="column"><div class="elementor-column-wrap  elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-b23efb2 mb-last elementor-widget elementor-widget-newszone-post-grid" data-id="b23efb2" data-element_type="widget" data-widget_type="newszone-post-grid.default"><div class="elementor-widget-container"><div class="grid-item"><div class="post-layout-three"><div class="blog-post-wrapper ts-overlay-style"><div class="item item-before post-overlay" style="background-image:url(wp-content/uploads/2020/03/gym.jpg)"> <a class="img-link" href="modern-yoga-brings-rhythm-in-life/index.html"></a><div class="grid-overlay-content"><div class="post-content"><div class="grid-category"></div><h3 class="post-title"> <a href="modern-yoga-brings-rhythm-in-life/index.html">Modern Yoga Brings Rhythm in Life</a></h3><ul class="post-meta-info ts-avatar-container "><li class="post-author"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' /><a href="author/admin/index.html">Millie</a></li><li> <i class="fa fa-clock-o"></i> Mar 28, 2020</li></ul></div></div></div></div></div></div></div></div><div class="elementor-element elementor-element-da17740 mb-last elementor-widget elementor-widget-newszone-post-grid" data-id="da17740" data-element_type="widget" data-widget_type="newszone-post-grid.default"><div class="elementor-widget-container"><div class="grid-item"><div class="post-layout-three"><div class="blog-post-wrapper ts-overlay-style"><div class="item item-before post-overlay" style="background-image:url(wp-content/uploads/2020/03/guiter.jpg)"> <a class="img-link" href="the-gunman-who-open-fire-at-the-gilroy-2/index.html"></a><div class="grid-overlay-content"><div class="post-content"><div class="grid-category"></div><h3 class="post-title"> <a href="the-gunman-who-open-fire-at-the-gilroy-2/index.html">The loss is not all that surprising</a></h3><ul class="post-meta-info ts-avatar-container "><li class="post-author"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' /><a href="author/admin/index.html">Millie</a></li><li> <i class="fa fa-clock-o"></i> Mar 28, 2020</li></ul></div></div></div></div></div></div></div></div></div></div></div></div></div></section>  -->
 
 
 
 
 
 <section class="elementor-element elementor-element-e591f30 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e591f30" data-element_type="section">
 <div class="elementor-container elementor-column-gap-default">
 <div class="elementor-row">
 <div class="elementor-element elementor-element-4ec8e3c elementor-column elementor-col-50 elementor-top-column" data-id="4ec8e3c" data-element_type="column">
 <div class="elementor-column-wrap  elementor-element-populated">
 <div class="elementor-widget-wrap">
 <div class="elementor-element elementor-element-6ae9477 title-sec-uniq elementor-widget elementor-widget-newszone-post-tab" data-id="6ae9477" data-element_type="widget" data-widget_type="newszone-post-tab.default">
 <div class="elementor-widget-container">
 
 <div class="featured-tab-item"><div class="post-block-element featured-tab">
 <div class="section-heading heading-style3">
 <h2 class="block-title"> Featured News</h2>
 </div>
 <ul class="nav nav-tabs" role="tablist">
 <li class="nav-item"><a class="nav-link active" href="#6ae947792a1ae5" data-toggle="tab">
 <span class="tab-head">
 <span class="tab-text-title">Positive</span>
 </span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#6ae9477eb58f73" data-toggle="tab"><span class="tab-head">
 <span class="tab-text-title">Negative</span></span></a></li><li class="nav-item">
 <a class="nav-link" href="#6ae9477cbdd305" data-toggle="tab"><span class="tab-head">
 <span class="tab-text-title">Neutral</span></span>
 </a></li>
 
 </ul>
 <div class="tab-content">
 
 
 <div role="tabpanel" class="tab-pane fade active show" id="6ae947792a1ae5">
 <div class="block-tab-item">
 <div class="row">
 
 <?php
 
 
 
 ?>
 
 
 
 <div class="col-md-6 col-sm-12">
 <div class="slider-item tab-item-slide post-overlay tab-left-item" style="background-image:url( <?php echo $data[0]['urlToImage'];  ?>)">
 <div class="featured-post">
 <a href="#" class="image-link">&nbsp;</a>
 <div class="overlay-post-content">
 <div class="post-content">
 <div class="grid-category">
 <a class="post-cat" href="" style="background-color:#ff3a3a;color:#ffffff">  <?php echo $type;  ?> </a>
 </div>
 <h2 class="post-title title-lg"> 
 <a href="" rel="bookmark" title=<?php echo $data[0]['title'];  ?>><?php echo $data[0]['title'];  ?> </a>
 </h2><ul class="post-meta-info ts-avatar-container ">
 <li class="ts-author-avatar">
 <img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' />
 <a href=""><?php echo $data[0]['author'];  ?></a></li>
 
 <li class="post-date"> <i class="fa fa-clock-o"></i> <?php echo $data[0]['publishedAt'];  ?></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>
 
 <div class="col-md-6 col-sm-12 second">
 <div class="post-block-list list-post-block">
 <ul class="list-post">
 <li>
 <div class="post-block-style media"><div class="post-thumb" style="background-image:url(<?php echo $data[1]['urlToImage'];  ?>)">
 </div>
 <div class="post-content media-body"><h4 class="post-title title-small"><a href="" rel="bookmark" title=<?php echo $data[1]['title'];  ?>><?php echo $data[1]['title'];  ?></a></h4><div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o">
 </i> <?php echo $data[1]['publishedAt'];  ?></span>
 </div>
 </div>
 </div>
 </li>
 <li>
 <div class="post-block-style media">
 <div class="post-thumb" style="background-image:url(<?php echo $data[2]['urlToImage'];  ?>)">
 </div>
 <div class="post-content media-body">
 <h4 class="post-title title-small"><a href="santino-loganne-legan-an-year-old-resident/index.html" rel="bookmark" title=<?php echo $data[2]['title'];  ?>><?php echo $data[2]['title'];  ?></a></h4>
 <div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o">
 </i> <?php echo $data[2]['publishedAt'];  ?></span></div></div></div>
 </li>
 <li>
 <div class="post-block-style media">
 <div class="post-thumb" style="background-image:url(<?php echo $data[3]['urlToImage'];  ?>)"></div>
 <div class="post-content media-body"><h4 class="post-title title-small"><a href="" rel="bookmark" title=<?php echo $data[3]['title'];  ?>><?php echo $data[3]['title'];  ?></a></h4>
 <div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o">
 </i> <?php echo $data[3]['publishedAt'];  ?></span></div></div></div>
 </li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>
 
 
 <div role="tabpanel" class="tab-pane fade" id="6ae9477eb58f73"> 
 <div class="block-tab-item">
 <div class="row">
 <div class="col-md-6 col-sm-12">
 <div class="slider-item tab-item-slide post-overlay tab-left-item" style="background-image:url(wp-content/uploads/2020/03/dancing-woman-770x470.jpg)">
 <div class="featured-post">
 <a href="#" class="image-link">&nbsp;</a>
 <div class="overlay-post-content">
 <div class="post-content"><div class="grid-category">
 <a class="post-cat" href="category/fashion/index.html" style="background-color:#ff3a3a;color:#ffffff"> Fashion </a>
 </div>
 <h2 class="post-title title-lg"> <a href="6-ways-to-instantly-improve-your-ui-design/index.html" rel="bookmark" title="The loss is not all that surprising">The loss is not all that surprising-Neutral</a></h2><ul class="post-meta-info ts-avatar-container ">
 <li class="ts-author-avatar"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' />
 <a href="author/admin/index.html">Millie</a></li><li class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</li></ul></div></div></div></div>
 </div>
 
 
 
 <div class="col-md-6 col-sm-12 second">
 <div class="post-block-list list-post-block">
 
 
 
 <ul class="list-post">
 
 <li>
 <div class="post-block-style media">
 <div class="post-thumb" style="background-image:url(wp-content/uploads/2020/03/fashion4.jpg)"></div>
 <div class="post-content media-body"><h4 class="post-title title-small">
 <a href="return-of-the-bench-seat-concept-show-space-big-for-sofas/index.html" rel="bookmark" title="Return of the bench seat Concept show space big for sofas">Return of the bench seat Concept show space</a></h4>
 <div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</span></div></div></div>
 </li>
 <li>
 <div class="post-block-style media">
 <div class="post-thumb" style="background-image:url(wp-content/uploads/2020/03/travel05.jpg)"></div>
 <div class="post-content media-body">
 <h4 class="post-title title-small">
 <a href="the-loss-is-not-all-that-surprising-given/index.html" rel="bookmark" title="The loss is not all that surprising given">The loss is not all that surprising given</a></h4>
 <div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</span></div></div></div>
 </li>
 <li>
 <div class="post-block-style media"><div class="post-thumb" style="background-image:url(wp-content/uploads/2020/03/travel04.jpg)"></div>
 <div class="post-content media-body"><h4 class="post-title title-small">
 <a href="early-tourists-choices-to-the-sea-of-maldives-in-fancy/index.html" rel="bookmark" title="Early tourists choices to the sea of Maldives in fancy">Early tourists choices to the sea of Maldives</a></h4>
 <div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</span></div></div></div>
 </li>
 
 
 </ul>
 
 
 </div></div></div></div>
 </div>
 
 
 <div role="tabpanel" class="tab-pane fade" id="6ae9477cbdd305"><div class="block-tab-item"><div class="row"><div class="col-md-6 col-sm-12"><div class="slider-item tab-item-slide post-overlay tab-left-item" style="background-image:url(wp-content/uploads/2020/03/sport01-770x470.jpg)">
 <div class="featured-post"> <a href="#" class="image-link">&nbsp;</a><div class="overlay-post-content"><div class="post-content"><div class="grid-category"> <a 
 class="post-cat" 
 href="category/sports/index.html"
 style="background-color:#ff9900;color:#ffffff"
 > Sports </a></div><h2 class="post-title title-lg"> <a href="brazil-secretart-thiago-wary-lionel-mesi/index.html" rel="bookmark" title="Brazil Secretart Thiago wary Lionel Mesi">Brazil Secretart Thiago wary Lionel Mesi</a></h2><ul class="post-meta-info ts-avatar-container "><li class="ts-author-avatar"><img alt='' src='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=45&amp;d=mm&amp;r=g' srcset='http://1.gravatar.com/avatar/12a459f11056f1153abc52debb66a109?s=90&#038;d=mm&#038;r=g 2x' class='avatar avatar-45 photo' height='45' width='45' /><a href="author/admin/index.html">Millie</a></li><li class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</li></ul></div></div></div></div></div><div class="col-md-6 col-sm-12 second"><div class="post-block-list list-post-block"><ul class="list-post"><li><div class="post-block-style media"><div class="post-thumb" style="background-image:url(wp-content/uploads/2020/03/sport03.jpg)"></div><div class="post-content media-body"><h4 class="post-title title-small"><a href="venezuela-elan-govt-and-opposit-the-property-collect-negote/index.html" rel="bookmark" title="Venezuela elan govt and opposit the property collect negote">Venezuela elan govt and opposit the property collect</a></h4><div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</span></div></div></div></li><li><div class="post-block-style media"><div class="post-thumb" style="background-image:url(wp-content/uploads/2020/03/health05.jpg)"></div><div class="post-content media-body"><h4 class="post-title title-small"><a href="california-compound-she-is-trying-to-sell-a-gat-ed/index.html" rel="bookmark" title="California compound she is trying to sell a gat ed">California compound she is trying to sell a</a></h4><div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</span></div></div></div></li><li><div class="post-block-style media"><div class="post-thumb" style="background-image:url(wp-content/uploads/2020/03/court-ball.jpg)"></div><div class="post-content media-body"><h4 class="post-title title-small"><a href="these-insects-carry-enough-bacteria-to-the-cause/index.html" rel="bookmark" title="These insects carry enough bacteria to the cause">These insects carry enough bacteria to the cause</a></h4><div class="post-meta"> <span class="post-date"> <i class="fa fa-clock-o"></i> Mar 28, 2020</span></div></div></div></li></ul></div></div></div></div>
 </div>

 </div></div></div>
 
 </div>
 
 </div></div></div></div>
</div></div></section>

 </div></div></div></div>
 
 
 
 <footer class="ts-footer theme-footer-widgets" >
 <div class="container"><div class="row">
 <div class="col-lg-2 col-sm-4 fadeInUp">
 <div class="footer-widget footer-left-widget">
 <h3 class="widget-title">World</h3>
 <div class="menu-footer-world-container">
 <ul id="menu-footer-world" class="menu">
 <li id="menu-item-352" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-352
 a href="#">Disasters</a></li><li id="menu-item-353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-353"><a href="#">Economy</a></li>
 <li id="menu-item-354" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-354">
 <a href="#">Relations</a></li><li id="menu-item-355" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-355"><a href="#">Conflicts</a>
 </li><li id="menu-item-356" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-356"><a href="#">Terrorism</a></li></ul>
 </div></div>
 <div class="footer-widget footer-left-widget"><div class="footer-social"><ul class="xs-social-list xs-social-list-v6 kyrill-social-list">
 <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li><li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
 <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li><li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
 </li></ul></div></div></div><div class="col-lg-2 col-sm-4"><div class="footer-widget footer-center-widget"><h3 class="widget-title">Music</h3>
 <div class="menu-footer-nav-2-container"><ul id="menu-footer-nav-2" class="menu">
 <li id="menu-item-347" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-347"><a href="#">Western Music</a></li>
 <li id="menu-item-348" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-348"><a href="#">Metal</a></li>
 <li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-349"><a href="#">K-Pop</a></li>
 <li id="menu-item-350" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-350"><a href="#">English Rock</a></li>
 <li id="menu-item-351" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-351"><a href="#">Spotify Premium</a></li></ul></div></div></div><div class="col-lg-2 col-sm-4"><div class="footer-widget footer-center-widget"><h3 class="widget-title">Media</h3><div class="menu-footer-nav-3-container"><ul id="menu-footer-nav-3" class="menu"><li id="menu-item-359" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-359"><a href="#">Bollywood</a></li><li id="menu-item-360" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-360"><a href="#">Hollywood</a></li><li id="menu-item-361" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-361"><a href="#">Tollywood</a></li><li id="menu-item-362" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-362"><a href="#">Marvel Movies</a></li><li id="menu-item-363" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-363"><a href="#">Character</a></li></ul></div></div></div><div class="col-lg-2 col-sm-4"><div class="footer-widget footer-right-widget"><h3 class="widget-title">Business</h3><div class="menu-footer-business-container"><ul id="menu-footer-business" class="menu"><li id="menu-item-332" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-332"><a href="#">Investment</a></li><li id="menu-item-333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-333"><a href="#">Politics</a></li><li id="menu-item-334" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-334"><a href="#">Markets</a></li><li id="menu-item-335" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-335"><a href="#">Stock Exchange</a></li><li id="menu-item-336" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-336"><a href="#">Business Stats</a></li></ul></div></div></div><div class="col-lg-2 col-sm-4"><div class="footer-widget footer-five-widget"><h3 class="widget-title">Health</h3><div class="menu-footer-health-container"><ul id="menu-footer-health" class="menu"><li id="menu-item-337" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-337"><a href="#">Living Science</a></li><li id="menu-item-338" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-338"><a href="#">Child’s Health</a></li><li id="menu-item-339" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-339"><a href="#">Mental Health</a></li><li id="menu-item-340" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-340"><a href="#">Medicine Export</a></li><li id="menu-item-341" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-341"><a href="#">Heart Health</a></li></ul></div></div></div><div class="col-lg-2 col-sm-4"><div class="footer-widget footer-six-widget"><h3 class="widget-title">Sports</h3><div class="menu-footer-nav-1-container"><ul id="menu-footer-nav-1" class="menu"><li id="menu-item-342" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-342"><a href="#">Football</a></li><li id="menu-item-343" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-343"><a href="#">Cricket</a></li><li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-344"><a href="#">Baseball</a></li><li id="menu-item-345" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-345"><a href="#">Hockey</a></li><li id="menu-item-346" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-346"><a href="#">La Liga</a></li></ul></div></div></div></div></div></footer><div class="copy-right"><div class="container"><div class="row"><div class="col-lg-6 col-md-6 align-self-center"><div class="copyright-text"><p> &copy; 2020, Kyrill. All Rights Reserved</p></div></div><div class="col-lg-6 col-md-6 align-self-center"><ul id="menu-footer-bottom" class="footer-nav"><li id="menu-item-357" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-357"><a href="#">Terms &#038; Conditions</a></li><li id="menu-item-358" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-358"><a href="#">Private Policy</a></li></ul></div><div class="backto"> <a href="#" class="icofont-long-arrow-up" aria-hidden="true"></a></div></div></div></div></div> 

	   <script defer src="wp-content/cache/autoptimize/js/autoptimize_633fad2f2f4bcf66211d439530992b5e.js"></script></body>
</html>
