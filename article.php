<div id="site-content">
  <?php while($this->next()): ?>
  <article class="post">
    <header class="post-header">
      <h1 class="post-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h1>
      <div class="post-meta">
        <span class="post-time">
          <time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>
        </span>
      </div>
    </header>
    <div class="post-content <?php if ($this->is('post') || $this->is('page')) { echo 'markdown-body'; } ?>">
      <?php
        if ($this->is('archive') || $this->is('index')):
          $this->content('<p> <a href="' . $this->permalink . '" class="more">Continue reading →</a></p>');
        else:
          $this->content();
        endif;
      ?>
    </div>
  </article>
    <?php if (!$this->is('archive') && !$this->is('index')):
        $this->need('comments.php');
      endif;
    ?>
  <?php endwhile; ?>
  <?php if ($this->is('archive') || $this->is('index')):
      $this->prev('« Older posts');
    endif;
  ?>
</div>
