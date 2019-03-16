<?php
/**
 * mypage
 * @package custom
 */
Typecho_Widget::widget('Widget_Stat')->to($stat);
$this->need('header.php'); ?>
<main id="main" class="main">
    <div class="main-inner">
        <div class="content-wrap">
            <div id="content" class="content">
                <div id="posts" class="posts-expand">
                    <div class="post">
                        <div>本页面由 Typecho 创建, 这只是个测试页面.</div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->need('sidebar.php'); ?>
    </div>
</main>
<?php $this->need('footer.php'); ?>
