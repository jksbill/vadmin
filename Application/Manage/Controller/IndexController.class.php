<?php
namespace Manage\Controller;
use Think\Controller;
class IndexController extends BaseController {

    public function index(){
        $this->display();
    }

    public function test () {
        layout(false);
        $this->html = $this->fetch('test');
        $this->display();
    }
    public function test1 () {
        layout(false);
        $this->html = $this->fetch('test1');
        // sleep(5);
        $this->display();
    }
    public function test2 () {
        layout(false);
        $this->dialog_title = '测试';
        $this->dialog_content = '测试内容';
        $html = $this->fetch('dialog');
        $array = array(
            'dialog' => 'callBack(\'' . $html . '\')',
            'eval' => 'eva("a")',
        );
        echo json_encode($array);
    }
    public function test3 () {
        layout(false);
        $this->html = $this->fetch('test3');
        $this->display();
    }
}