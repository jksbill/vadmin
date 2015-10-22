<?php
namespace Manage\Controller;
use Think\Controller;
class PageController extends BaseController {
    public function _initialize () {
        layout(false);
    }

    public function road () {
        $this->ajax_display('road');
    }

    public function index () {
        //第几页
        $this->page = I('get.page') ? I('get.page') : 1;
        //每页条数
        $page_list = 10;
        //总条数
        $count = M('Station')->count();
        //页数
        $this->page_num = ceil($count / $page_list);
        $this->stations = M('Station')->page($this->page, $page_list)->order('create_time desc')->select();
        $this->ajax_display('index');
    }

    public function add_station () {
        $this->dialog_title = '添加车站';
        $this->post_url = '/Manage/Page/do_add_station';
        // $this->road_num = 'bill_name';
        $this->dialog_content = $this->fetch('Page/add_station');
        $html = $this->fetch('Modal/dialog_form');
        $html = compress_html($html);
        $array = array(
            'dialog' => 'callBack(\'' . $html . '\')',
        );
        echo json_encode($array);
    }

    public function do_add_station () {
        $data['zh_name'] = I('station_zh_name');
        $data['en_name'] = I('station_en_name');
        $data['longitude'] = I('longitude');
        $data['latitude'] = I('latitude');
        $data['create_time'] = date('Y-m-d H:i:s');
        $array = array(
            'state' => 'error',
            'msg' => '对不起，保存失败',
        );
        if ($data['zh_name'] && $data['en_name'] && $data['longitude'] && $data['latitude']) {
            if (M('Station')->add($data)) {
                $array = array(
                    'state' => 'success',
                    'msg' => '恭喜你，保存成功',
                );
            }
        }
        echo json_encode($array);
    }

    public function test () {
        var_dump($_POST);
    }
}