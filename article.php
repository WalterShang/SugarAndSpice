<div class="site-content">
  <?php while($this->next()): ?>
  <article class="post">
    <header class="header">
      <h1 class="title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h1>
      <ul class="meta">
        <li>
          <span><?php $this->date('F j, Y'); ?></span>
        </li>
      </ul>
    </header>
    <div class="body <?php if ($this->is('post') || $this->is('page')) { echo 'markdown-body'; } ?>">
    <?php
      if ($this->is('archive') || $this->is('index')):
          $this->content('继续阅读 →');
      else:
          $this->content();
      endif;
    ?>
    </div>
    <?php if ($this->is('post')): ?>
    <footer class="footer">
      <div>
          <span>标签:</span>
        <?php $this->tags(','); ?>
      </div>
      <div>
          <span>分类:</span>
        <?php $this->category(','); ?>
      </div>
    </footer>
    <?php endif; ?>
  </article>
  <?php if (!$this->is('archive') && !$this->is('index')):
        $this->need('comments.php');
      endif;
  ?>
  <?php endwhile; ?>
  <?php if ($this->is('archive') || $this->is('index')): ?>
  <div class="pagenavi">
    <?php $this->pageLink('« 较早的文章', 'next'); ?>
    <?php $this->pageLink('较新的文章 »', 'prev'); ?>
  </div>
  <?php endif; ?>
</div>
