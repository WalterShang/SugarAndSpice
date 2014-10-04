<div class="site-aside">
  <div class="widget">
    <h3>
      <span>RECENT <em>REPLIES</em></span>
    </h3>
    <ul>
      <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
      <?php while($comments->next()): ?>
         <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
      <?php endwhile; ?>
    </ul>
  </div>

  <?php $plugins = Typecho_Plugin::export(); ?>
  <?php if (array_key_exists('Links', $plugins['activated'])): ?>
  <div class="widget">
    <h3>
      <span><em>friends</em> links</span>
    </h3>
    <div class="split-list">
      <ul>
      <?php Links_Plugin::output('<li><a href="{url}" target="_blank">{name}</a></li>'); ?>
      </ul>
    </div>
  </div>
  <?php endif; ?>

  <div class="widget">
    <h3>
      <span>date <em>archives</em></span>
    </h3>
    <div class="split-list">
      <ul>
      <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
      </ul>
    </div>
  </div>
</div>
