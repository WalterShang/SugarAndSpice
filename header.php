<html class="no-js">
<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
      ), '', ' - '); ?><?php $this->options->title(); ?></title>

  <link rel="stylesheet" id="sugarspice-fonts-css" href="//fonts.googleapis.com/css?family=Niconne%7CPT%2BSerif%3A400%2C700%7CRaleway%3A400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1" type="text/css" media="all">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
  <?php $this->header(); ?>
</head>

<body>
  <div class="wrap">
    <header id="site-header">
      <div id="site-branding">
        <h1 id="site-title">
          <a href="<?php $this->options->siteUrl() ?>">
            <?php $this->options->title() ?>
          </a>
        </h1>
        <h2 id="site-description"><?php $this->options->description() ?></h2>
      </div>
      <div id="navbar">
        <div class="ribbon-left"></div>
        <nav id="navbar-nav">
          <ul id="nav" class="l_tinynav1">
            <li <?php if ($this->is('index')) { echo 'class="current"'; } ?>>
              <a href="<?php $this->options->siteUrl(); ?>">
                <?php _e('首页'); ?>
              </a>
            </li>
            <li class="has-children">
              <a href="#">分类</a>
              <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=children'); ?>
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li <?php if($this->is('page', $pages->slug)) { echo 'class="current"'; } ?>>
              <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                <?php $pages->title(); ?>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
        </nav>
        <div class="ribbon-right"></div>
      </div>
	</header>

  <div id="main">
