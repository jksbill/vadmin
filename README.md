[VCMS](http://www.vsonter.com/Public/images/logo.png)

# VCMS

VCMS是一款轻量级的、最原始的文章管理系统，其他系统可以基于它进行二次开发。后台使用bootstrap前端框架，集成了各种表单控件，快速，方便，易懂。

## VCMS后台功能特点

- 栏目无限分类
- 实现权限控制
- 各类form组件使用W方法封装好
- 支持多语音设置
- 文章管理
- 问答管理
- 实现多媒体版本（手机和电脑）
- 各种js插件已经初始化，如（UEditor,Uploadify等）
- 集成短信与邮件模块
- 集成百度地图api
- 集成formValidation
- 登录模块

##使用帮助

###数据分页
需要分页的控制器必须继承BaseController,使用$this->getPage方法。
如：
```php
$this->getPage('Article', $where, $listNum);
```
分页可添加条件，排序等。若想使用批量删除功能，请设置第4个参数为true
如：
```php
getPage('Article', $where, $listNum, true, 'create_time desc', 'join v_category on v_category.id = v_article.cid', 'LEFT');
```
注意：设置默认展示条数要开启redis，且通过baseModel中的`get_list_number(条数)`函数设定，并分配delete_url用于指定批量删除的具体链接。
```php
$listNum = $this->get_list_number($this->listNum);
$this->delete_url = '/vsonter/article/delete_batch';
$this->getPage('Article', $where, $listNum, true);
```

###批量删除
在delete_url对应的控制器中使用`$this->delete_db_batch($table, $ids)`函数做批量删除。
如：
```php
$this->delete_db_batch('Article', $ids);
```
注意：前台遍历checkbox按钮是，要给input加上data-id属性，以便后台获取到需要删除的ids。

###模态框
1、在需要点击弹出模态框的元素加入ajaxLink类，并可以在href或data-href中填写链接地址，
如：
```html
<a href="/vsonter/article/pre_add_article" class="btn btn-xs btn-primary right ajaxLink">
    <i class="gi gi-plus"></i> 
    新建文章
</a>
```
2、在href或data-href对应的控制器中使用$this->get_dialog_model()方法获取对应模板，模板中用到的变量也要分配过去。其中dislog_title和post_url是必须分配的。
如：
```php
$this->dialog_title = '添加文章类型';
$this->post_url = '/Vsonter/Article/do_add_article_type';
$this->get_dialog_model('Article/add_article_type_dialog');
```
3、在对应的View中添加模板文件。

###表单控件
```html
button:`{:W('Common/Form/button', array('btn'))}`
checkbox:`{:W('Common/Form/checkbox', array('id', 'name', 'label_name', 1, 'help_block'))}`
date-picker:`{:W('Common/Form/datepicker', array('id', 'name', 'label_name', $value, 'yyyy/mm/dd', 'help_block'))}`
hidden:`{:W('Common/Form/hidden_input', array('id', 'name', $value))}`

input:`{:W('Common/Form/input', array('id', 'name', 'label_name', $value, 'place_holder', 'help_block'))}`
multiple-select:`{:W('Common/Form/multiple_select', array($id, $name, $label_name, $options, 'place_holder', 'help_block'))}`
password:`{:W('Common/Form/password', array('id', 'name', 'label_name', $value, 'place_holder', 'help_block'))}`
phone:`{:W('Common/Form/phone', array($id, $name, $label_name, $value, 'place_holder', 'help_block'))}`

search-input:`{:W('Common/Form/search_input', array($id, $name, 'place_holder', $value, 'direction', 'ico'))}`
single-select:`{:W('Common/Form/single_select', array('id', 'name', 'label_name', $options, $value, 'place_holder', 'help_block'))}`
spinner:`{:W('Common/Form/spinner', array($id, $name, $label_name, $value, 'help_block'))}`
submit:`{:W('Common/Form/submit', array('btn', 'back', 'back_link'))}`

textarea:`{:W('Common/Form/textarea', array('id', 'name', 'label_name', $value, 'place_holder', 'help_block'))}`
timer-picker:`{:W('Common/Form/timerpicker', array('id', 'name', 'label_name', $value, 'yyyy/mm/dd', 'help_block'))}`
upload:`{:W('Common/Form/upload', array('id', 'name', 'label_name', $value, 'queue_id'))}`
ueditor:`{:W('Common/Form/ueditor', array($id, $name, $label_name, $value, 'help_block'))}`
```
注意：单选框和多选框的$options值是使用select_array_by_key($dbarray, $key, $value)方法获取名值对应的数组。

###删除操作
在需要点击弹出模态框的元素加入ajaxLink类，并可以在href或data-href中填写链接地址，删除提示写在data-msg属性上。
如：
```html
<a class="itemDelete" data-msg="删除文章后不能恢复，是否要继续删除?" data-href="/Vsonter/Article/delete/id/32/p/" title="">删除</a>
```

###文件下载
使用download($download_file_name, $server_file_path);方法下载文件

###表单验证
1、封装formValidation插件，只要在需要验证的表单页面加上验证参数即可
```javascript
var validate_option = {
    version: {
        row: '.col-sm-4',
        validators: {
            notEmpty: {
                message: '版本信息不能为空'
            }
        }
    },
};
```

## 版权
VCMS一切版权归 [珠海威信特网络有限公司](http://www.vsonter.com) 所有
版权©2015-2016
