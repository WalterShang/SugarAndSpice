    </div>

    <div class="prefooter">
      <div class="inner">
        <div class="widget">
          <h3><span><em>search</em> insite</span></h3>
          <form class="site-search" method="post" action="./">
            <input type="text" name="s"placeholder="搜索" />
          </form>
        </div>
        <div class="widget">
          <h3><span><em>tags</em> cloud</span></h3>
          <ul class="tag-list">
            <?php $this->widget('Widget_Metas_Tag_Cloud')->parse('
                <li><a href="{permalink}">{name}</a></li>
            '); ?> 
          </ul>
        </div>
        <div class="widget">
          <h3><span><em>metas</em></span></h3>
          <ul>
          <?php if($this->user->hasLogin()): ?>
		    <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
            <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
          <?php else: ?>
            <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
          <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS') ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="site-info">
      Powered by  <a href="http://typecho.org/">Typecho</a>
      <span class="sep"> | </span>
      Theme <a href="https://github.com/DreamHarbor/SugarAndSpice">Sugar & Spice</a>
      Coding by <a href="http://blog.sloger.info">Sloger</a>.
      <span class="sep"> | </span>
      Designed by <a href="http://webtuts.pl">WebTuts</a>.
    </div>
  </footer>

  <script src="<?php $this->options->adminUrl('js/jquery.js') ?>"></script>
  <script src="<?php $this->options->themeUrl('script.js') ?>"></script>
  <?php $this->footer() ?>
</body>
</html>
