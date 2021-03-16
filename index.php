<?php
/**
 * 这是一套简洁的博客主题 <a href="https://www.misterma.com/archives/892/" target="_blank">点击查看使用说明</a>
 *
 * @package Facile
 * @author Mr. Ma
 * @version 开发板（暂无版本号）
 * @link https://www.misterma.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$GLOBALS['page'] = 'index';
$this->need('components/header.php');
?>

<div class="container main">
    <div class="row mt-4">
        <div class="col-xl-8 col-lg-8 post-list">
            <?php $this->need('components/post-list.php'); ?>
            <nav class="page-nav my-5" aria-label="分页导航">
                <?php $this->pageNav('&laquo;', '&raquo;', 1, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination justify-content-center', 'itemTag' => 'li', 'textTag' => 'a', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
            </nav>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div>

<?php $this->need('components/footer.php'); ?>