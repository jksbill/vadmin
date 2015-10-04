<?php
namespace Manage\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
        $this->template = C('TEMPLATE');
        $this->primary_nav = C('PRIMARY_NAV');
    }
}