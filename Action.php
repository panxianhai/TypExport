<?php

class TypExport_Action extends Typecho_Widget implements Widget_Interface_Do
{
    /**
     * 导出xml
     *
     * @access public
     * @return void
     */
    public function doExport()
    {
        // 备份的数据
        $content = $this->getStream();
        // 备份文件名
        $fileName = 'wordpress.' . date('Y-m-d') . '.xml';

        header('Content-Description: File Transfer');
        header('Content-Type: text/xml');
        header('Content-Disposition: attachment; filename=' . $fileName);
        if (preg_match("/MSIE ([0-9].[0-9]{1,2})/", $_SERVER['HTTP_USER_AGENT'])) {
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
        } else {
            header('Pragma: no-cache');
            header('Last-Modified: '. gmdate('D, d M Y H:i:s',
                Typecho_Date::gmtTime() + (Typecho_Date::$timezoneOffset - Typecho_Date::$serverTimezoneOffset)) . ' GMT');
        }
        header('Expires: ' . gmdate('D, d M Y H:i:s',
            Typecho_Date::gmtTime() + (Typecho_Date::$timezoneOffset - Typecho_Date::$serverTimezoneOffset)) . ' GMT');
        echo <<<
<<<;
    }

    /**
     * 绑定动作
     *
     * @access public
     * @return void
     */
    public function action()
    {
        $this->widget('Widget_User')->pass('administrator');
        $this->on($this->request->is('export'))->doExport();
    }
}
