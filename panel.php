<?php
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
                <p>导出的XML文件可以直接导入到wordpress。</p>
                <form action="<?php $options->index('/action/typexport?export'); ?>" method="post">
                    <ul class="typecho-option typecho-option-submit" id="typecho-option-item-submit-3">
                        <li>
                            <button type="submit" class="primary"><?php _e('导出XML文件'); ?></button>
                        </li>
                    </ul>
                </form>
            </div>
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
