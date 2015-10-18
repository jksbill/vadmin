<?php
namespace Manage\Controller;
use Think\Controller;
class ModalController extends BaseController {
    public function _initialize () {
        layout(false);
    }

    public function index () {
        $this->display();
    }

    public function dialog () {
        layout(false);
        $this->dialog_title = '测试';
        $this->dialog_content = '测试内容';
        $html = $this->fetch('dialog');
        $html = compress_html($html);
        $array = array(
            'dialog' => 'callBack(\'' . $html . '\')',
            'eval' => 'eva("a")',
        );
        echo json_encode($array);
    }
}