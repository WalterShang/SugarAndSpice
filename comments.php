<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
  <div class="comments widget">
    <h3>
      <span>
        <?php $this->commentsNum(_t('no <em>reply</em>'), _t('1 <em>reply</em>'), _t('%d <em>replies</em>')); ?>
      </span>
    </h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('« 前一页', '后一页 »'); ?>
  </div>
  <?php endif; ?>

  <?php if($this->allow('comment')): ?>
  <div id="<?php $this->respondId(); ?>" class="respond widget">
    <div class="cancel-comment-reply">
      <?php $comments->cancelReply(); ?>
    </div>
    
    <h3 id="response"><span>new <em>reply</em></span></h3>
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
      <?php if($this->user->hasLogin()): ?>
      <div class="login-info">
        <?php _e('登录身份: '); ?>
        <a href="<?php $this->options->profileUrl(); ?>">
          <?php $this->user->screenName(); ?>
        </a>. 
        <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
          <?php _e('退出'); ?> &raquo;
        </a>
      </div>
      <?php else: ?>
      <div class="field">
        <label for="mail">User (required) :</label>
        <input type="text" name="author" id="author" value="<?php $this->remember('author'); ?>">
      </div>
      <div class="field">
        <label for="mail">Email <?php if ($this->options->commentsRequireMail): ?>(required) <?php endif; ?>:</label>
        <input type="email" name="mail" id="mail" value="<?php $this->remember('mail'); ?>">
      </div>
      <div class="field">
        <label for="mail">Url <?php if ($this->options->commentsRequireURL): ?>(required) <?php endif; ?>:</label>
        <input type="url" name="url" id="url" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>">
   	  </div>
      <?php endif; ?>
      <div class="field">
        <label for="textarea"><?php _e('内容'); ?></label>
        <textarea name="text" id="textarea"><?php $this->remember('text'); ?></textarea>
      </div>
      <div>
        <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
      </div>
    </form>
  </div>
  <?php else: ?>
  <h3><?php _e('评论已关闭'); ?></h3>
  <?php endif; ?>
</div>
