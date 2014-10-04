<html>
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

  <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
  <?php $this->header(); ?>
</head>

<body>
  <div class="wrap">
    <header class="site-header">
      <div class="site-branding">
        <h1 class="site-title">
          <a href="<?php $this->options->siteUrl() ?>">
            <?php $this->options->title() ?>
          </a>
        </h1>
        <h2 class="site-description">
          <?php $this->options->description() ?>
        </h2>
      </div>

      <div class="site-navbar">
        <div class="ribbon-left"></div>
        <ul class="navbar-nav">
          <li <?php if ($this->is('index')) { echo 'class="current"'; } ?>>
            <a href="<?php $this->options->siteUrl(); ?>">首页</a>
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
        
        <div class="ribbon-right"></div>
      </div>
	</header>

  <div class="site-main">
