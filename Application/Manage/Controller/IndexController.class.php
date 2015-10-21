<?php
namespace Manage\Controller;
use Think\Controller;
class IndexController extends BaseController {

    public function index(){
        $this->display();
    }

    public function test () {
        layout(false);
        $this->ajax_display('test');
    }

    public function ajax_fetch () {
        
        $this->ajax_display('ajax_fetch');
    }
    public function test2 () {
        layout(false);
        $this->dialog_title = '测试';
        $this->dialog_content = '测试内容';
        $html = $this->fetch('dialog');
        $html = compress_html($html);
        $array = array(
            'dialog' => 'callBack(\'' . $html . '\')',
            // 'eval' => 'eva("a")',
        );
        echo json_encode($array);
    }
}