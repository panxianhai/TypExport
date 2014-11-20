<?php
$current_version = 0.9;

$version = file_get_contents('http://upgrade.sinaapp.com/typecho/TypExport/version.php');

if ($version > $current_version) {
    $message = "此插件有新版本({$version}),当前版本({$current_version}),请到<a href='https://github.com/panxianhai/TypExport'><strong>这里</strong></a>下载更新";
}

include_once 'common.php';
include 'header.php';
include 'menu.php';
?>

<div class="main">
    <div class="body container">
        <div class="typecho-page-title">
            <h2><?php _e('数据导出'); ?></h2>
        </div>
        <div class="row typecho-page-main" role="form">
            <div id="dbmanager-plugin" class="col-mb-12 col-tb-8 col-tb-offset-2">
                <p>在您点击下面的按钮后，Typecho会创建一个XML文件，供您保存到计算机中。</p>
                <p>我们称这种格式为WordPress eXtended RSS或WXR，它包含了您的全部文章、页面、评论、分类目录和标签。</p>
                <p style="background: #f4ff1c"><?php echo $message; ?></p>
                <form action="<?php $options->index('/action/typexport?export'); ?>" method="post">
                    <ul class="typecho-option typecho-option-submit" id="typecho-option-item-submit-3">
                        <li>
                            <button type="submit" class="primary"><?php _e('导出XML文件'); ?></button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        
        <div>
            <p>插件作者：<a href="http://panxianhai.com">panxianhai</a></p>
            <p>源码地址：<a href="https://github.com/panxianhai">Github</a></p>
        </div>
    </div>
</div>

<?php
include 'copyright.php';
include 'common-js.php';
include 'dbmanager-js.php';
include 'table-js.php';
include 'footer.php';
?>
