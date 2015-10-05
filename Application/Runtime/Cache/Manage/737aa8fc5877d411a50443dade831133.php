<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?php echo $template['title'] ?></title>

    <meta name="description" content="<?php echo $template['description'] ?>">
    <meta name="author" content="<?php echo $template['author'] ?>">
    <meta name="robots" content="<?php echo $template['robots'] ?>">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/Public/Proui/img/favicon.ico">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="/Public/Proui/img/icon152.png" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="/Public/Proui/css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="/Public/Proui/css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="/Public/Proui/css/main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
    <?php if ($template['theme']) { ?><link id="theme-link" rel="stylesheet" href="/Public/Proui/css/themes/<?php echo $template['theme']; ?>.css"><?php } ?>
    <!-- uploadifive的配置 -->
    <script type="text/javascript">
        
    <?php $timestamp = time();?>;
        var timestamp = <?php echo $timestamp;?>;
        var token = "<?php echo md5('unique_salt' . $timestamp);?>";
    </script>
    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="/Public/Proui/css/themes.css">
    <!-- END Stylesheets -->

    <link rel="stylesheet" type="text/css" href="/Public/uploadifive/uploadifive.css">
    <link rel="stylesheet" href="/Public/css/manage.css">
    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="/Public/Proui/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    <script src="/Public/Proui/js/vendor/jquery-1.11.0.min.js"></script>
    <script src="/Public/sortable/Sortable.js"></script>
    <script src="/Public/uploadifive/jquery.uploadifive.min.js"></script>
    
    <!-- <script src="/Public/js/bootstrap.min.js"></script> -->
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/Public/Proui/js/vendor/jquery-1.11.0.min.js"%3E%3C/script%3E'));</script>
</head>
<body>
    
<?php
 $page_classes = ''; if ($template['header'] == 'navbar-fixed-top') { $page_classes = 'header-fixed-top'; } else if ($template['header'] == 'navbar-fixed-bottom') { $page_classes = 'header-fixed-bottom'; } if ($template['sidebar']) { $page_classes .= (($page_classes == '') ? '' : ' ') . $template['sidebar']; } if ($template['main_style'] == 'style-alt') { $page_classes .= (($page_classes == '') ? '' : ' ') . 'style-alt'; } if ($template['footer'] == 'footer-fixed') { $page_classes .= (($page_classes == '') ? '' : ' ') . 'footer-fixed'; } ?>
<div id="page-container"<?php if ($page_classes) { echo ' class="' . $page_classes . '"'; } ?>>
    <!-- Alternative Sidebar -->
    <div id="sidebar-alt">
        <!-- Wrapper for scrolling functionality -->
        <div class="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                sidebar-content
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
    </div>
    <!-- END Alternative Sidebar -->

    <!-- Main Sidebar -->
    <div id="sidebar">
        <!-- Wrapper for scrolling functionality -->
        <div class="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Brand -->
                <a href="index.php" class="sidebar-brand">
                    <i class="gi gi-flash"></i><strong>Pro</strong>UI
                </a>
                <!-- END Brand -->
                <!-- Theme Colors -->
                <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                <ul class="sidebar-section sidebar-themes clearfix">
                    <li class="active">
                        <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="css/themes/modern.css" data-toggle="tooltip" title="Modern"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="css/themes/flatie.css" data-toggle="tooltip" title="Flatie"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="css/themes/spring.css" data-toggle="tooltip" title="Spring"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="css/themes/fancy.css" data-toggle="tooltip" title="Fancy"></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                    </li>
                </ul>
                <!-- END Theme Colors -->

                <?php if ($primary_nav) { ?>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <?php foreach( $primary_nav as $key => $link ) { $link_class = ''; $li_active = ''; $menu_link = ''; $url = (isset($link['url']) && $link['url']) ? $link['url'] : '#'; $active = (isset($link['url']) && ($template['active_page'] == $link['url'])) ? ' active' : ''; $icon = (isset($link['icon']) && $link['icon']) ? '<i class="' . $link['icon'] . ' sidebar-nav-icon"></i>' : ''; if (isset($link['sub']) && $link['sub']) { foreach ($link['sub'] as $sub_link) { if (in_array($template['active_page'], $sub_link)) { $li_active = ' class="active"'; break; } if (isset($sub_link['sub']) && $sub_link['sub']) { foreach ($sub_link['sub'] as $sub2_link) { if (in_array($template['active_page'], $sub2_link)) { $li_active = ' class="active"'; break; } } } } $menu_link = 'sidebar-nav-menu'; } if ($menu_link || $active) { $link_class = ' class="'. $menu_link . $active .'"'; } ?>
                    <?php if ($url == 'header') { ?>
                    <li class="sidebar-header">
                        <?php if (isset($link['opt']) && $link['opt']) { ?>
                        <span class="sidebar-header-options clearfix"><?php echo $link['opt']; ?></span>
                        <?php } ?>
                        <span class="sidebar-header-title"><?php echo $link['name']; ?></span>
                    </li>
                    <?php } else { ?>
                    <li<?php echo $li_active; ?>>
                        <a <?php if($link['class']): ?>class="<?php echo ($link['class']); ?>"<?php endif; ?> data-tab="<?php echo ($link['en_name']); ?>" href="<?php echo $url; ?>"<?php echo $link_class; ?>><?php if (isset($link['sub']) && $link['sub']) { ?><i class="fa fa-angle-left sidebar-nav-indicator"></i><?php } echo $icon . $link['name']; ?></a>
                        <?php if (isset($link['sub']) && $link['sub']) { ?>
                        <ul>
                            <?php foreach ($link['sub'] as $sub_link) { $link_class = ''; $li_active = ''; $submenu_link = ''; $url = (isset($sub_link['url']) && $sub_link['url']) ? $sub_link['url'] : '#'; $active = (isset($sub_link['url']) && ($template['active_page'] == $sub_link['url'])) ? ' active' : ''; if (isset($sub_link['sub']) && $sub_link['sub']) { foreach ($sub_link['sub'] as $sub2_link) { if (in_array($template['active_page'], $sub2_link)) { $li_active = ' class="active"'; break; } } $submenu_link = 'sidebar-nav-submenu'; } if ($submenu_link || $active) { $link_class = ' class="'. $submenu_link . $active .'"'; } ?>
                            <li<?php echo $li_active; ?>>
                                <a <?php if($sub_link['class']): ?>class="<?php echo ($sub_link['class']); ?>"<?php endif; ?> data-tab="<?php echo ($sub_link['en_name']); ?>" href="<?php echo $url; ?>"<?php echo $link_class; ?>><?php if (isset($sub_link['sub']) && $sub_link['sub']) { ?><i class="fa fa-angle-left sidebar-nav-indicator"></i><?php } echo $sub_link['name']; ?></a>
                                <?php if (isset($sub_link['sub']) && $sub_link['sub']) { ?>
                                    <ul>
                                        <?php foreach ($sub_link['sub'] as $sub2_link) { $url = (isset($sub2_link['url']) && $sub2_link['url']) ? $sub2_link['url'] : '#'; $active = (isset($sub2_link['url']) && ($template['active_page'] == $sub2_link['url'])) ? ' class="active"' : ''; ?>
                                        <li>
                                            <a href="<?php echo $url; ?>"<?php echo $active ?>><?php echo $sub2_link['name']; ?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
                <!-- END Sidebar Navigation -->
                <?php } ?>

            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
    </div>
    <!-- END Main Sidebar -->

    <!-- Main Container -->
    <div id="main-container">
        <!-- Header -->
        <!-- In the PHP version you can set the following options from inc/config.php file -->
        <!--
            Available header.navbar classes:

            'navbar-default'            for the default light header
            'navbar-inverse'            for an alternative dark header

            'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

            'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
        -->
        <header class="navbar<?php if ($template['header_navbar']) { echo ' ' . $template['header_navbar']; } if ($template['header']) { echo ' '. $template['header']; } ?>">
            <?php if ( $template['header_content'] == 'horizontal-menu' ) { ?>
            <!-- Navbar Header -->
            <div class="navbar-header">
                <!-- Horizontal Menu Toggle + Alternative Sidebar Toggle Button, Visible only in small screens (< 768px) -->
                <ul class="nav navbar-nav-custom pull-right visible-xs">
                    <li>
                        <a href="javascript:void(0)" data-toggle="collapse" data-target="#horizontal-menu-collapse">Menu</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                            <i class="gi gi-share_alt"></i>
                            <span class="label label-primary label-indicator animation-floating">4</span>
                        </a>
                    </li>
                </ul>
                <!-- END Horizontal Menu Toggle + Alternative Sidebar Toggle Button -->

                <!-- Main Sidebar Toggle Button -->
                <ul class="nav navbar-nav-custom">
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                            <i class="fa fa-bars fa-fw"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Main Sidebar Toggle Button -->
            </div>
            <!-- END Navbar Header -->

            <!-- Alternative Sidebar Toggle Button, Visible only in large screens (> 767px) -->
            <ul class="nav navbar-nav-custom pull-right hidden-xs">
                <li>
                    <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">
                        <i class="gi gi-share_alt"></i>
                        <span class="label label-primary label-indicator animation-floating">4</span>
                    </a>
                </li>
            </ul>
            <!-- END Alternative Sidebar Toggle Button -->

            <!-- Horizontal Menu + Search -->
            <div id="horizontal-menu-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Profile</a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Settings <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="fa fa-asterisk fa-fw pull-right"></i> General</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-lock fa-fw pull-right"></i> Security</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-user fa-fw pull-right"></i> Account</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-magnet fa-fw pull-right"></i> Subscription</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0)" tabindex="-1"><i class="fa fa-chevron-right fa-fw pull-right"></i> More Settings</a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" tabindex="-1">Second level</a></li>
                                    <li><a href="javascript:void(0)">Second level</a></li>
                                    <li><a href="javascript:void(0)">Second level</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a href="javascript:void(0)" tabindex="-1"><i class="fa fa-chevron-right fa-fw pull-right"></i> More Settings</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)">Third level</a></li>
                                            <li><a href="javascript:void(0)">Third level</a></li>
                                            <li><a href="javascript:void(0)">Third level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="fa fa-envelope-o fa-fw pull-right"></i> By Email</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-phone fa-fw pull-right"></i> By Phone</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="page_ready_search_results.php" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search..">
                    </div>
                </form>
            </div>
            <!-- END Horizontal Menu + Search -->
            <?php } else { ?>
            <!-- Left Header Navigation -->
            <ul class="nav navbar-nav-custom">
                <!-- Main Sidebar Toggle Button -->
                <li>
                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                        <i class="fa fa-bars fa-fw"></i>
                    </a>
                </li>
                <!-- END Main Sidebar Toggle Button -->

                <!-- Template Options -->
                <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="gi gi-settings"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-custom dropdown-options">
                        <li class="dropdown-header text-center">头部样式设置</li>
                        <li>
                            <div class="btn-group btn-group-justified btn-group-sm">
                                <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">浅色</a>
                                <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">深色</a>
                            </div>
                        </li>
                        <li class="dropdown-header text-center">页面颜色设置</li>
                        <li>
                            <div class="btn-group btn-group-justified btn-group-sm">
                                <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">默认</a>
                                <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">反选</a>
                            </div>
                        </li>
                        <li class="dropdown-header text-center">头部布局</li>
                        <li>
                            <button class="btn btn-sm btn-block btn-primary" id="options-header-top">顶部（默认）</button>
                            <button class="btn btn-sm btn-block btn-primary" id="options-header-bottom">底部</button>
                        </li>
                        <li class="dropdown-header text-center">页脚设置</li>
                        <li>
                            <div class="btn-group btn-group-justified btn-group-sm">
                                <a href="javascript:void(0)" class="btn btn-primary" id="options-footer-static">默认</a>
                                <a href="javascript:void(0)" class="btn btn-primary" id="options-footer-fixed">定位</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- END Template Options -->
            </ul>
            <!-- END Left Header Navigation -->

            <!-- Search Form -->
            <form action="page_ready_search_results.php" method="post" class="navbar-form-custom" role="search">
                <div class="form-group">
                    <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                </div>
            </form>
            <!-- END Search Form -->

            <!-- Right Header Navigation -->
            <ul class="nav navbar-nav-custom pull-right">
                <!-- Alternative Sidebar Toggle Button -->
                <li>
                    <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">
                        <i class="gi gi-share_alt"></i>
                        <span class="label label-primary label-indicator animation-floating">4</span>
                    </a>
                </li>
                <!-- END Alternative Sidebar Toggle Button -->

                
            </ul>
            <!-- END Right Header Navigation -->
            <?php } ?>
        </header>
        <!-- END Header -->
 
<div id="page-content">
    <div id="user-nav-top">

        <ul class="breadcrumb breadcrumb-top" id="user-breadscrumb">
            <!-- <li>欢迎页</li> -->
            <!-- <li><a href="">Buttons &amp; Dropdowns</a></li> -->
        </ul>
        <div class="content-header">
            <div class="header-section">
                <ul class="nav nav-tabs push" id="user-tabs" data-toggle="tabs">
                    <!-- <li class="active"><a href="#welcome">欢迎页<i class="gi gi-remove_2" onclick="removeTab(this);"></i></a></li> -->
                    <!-- <li class=""><a href="#example-tabs-profile">Profile</a></li>
                    <li class=""><a href="#example-tabs-messages">Messages</a></li> -->
                </ul>
            </div>
        </div>
    </div>

        <!-- <form>
            <div id="queue"></div>
            <input class="file_upload" id="file_upload" queueID='queue' name="file_upload" type="file" multiple="true">
            <a style="position: relative; top: 8px;" href="javascript:$('#file_upload').uploadifive('upload')">确定上传</a>
        </form>
        <form>
            <div id="queue1"></div>
            <input class="file_upload" id="upload" queueID='queue1' name="file_upload" type="file" multiple="true">
            <a style="position: relative; top: 8px;" href="javascript:$('#upload').uploadifive('upload')">确定上传</a>
        </form> -->
        <script type="text/javascript">
            <?php $timestamp = time();?>
            /*$(function() {
                $(".file_upload").each(function (index, ele) {
                    var queueID = $(ele).attr('queueID');
                    $(ele).uploadifive({
                        'auto'             : false,
                        'formData'         : {
                                               'timestamp' : '<?php echo $timestamp;?>',
                                               'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                                             },
                        'buttonText'       : '选择上传文件',
                        'queueID'          : queueID,
                        'uploadScript'     : '/Public/uploadifive.php',
                        'onUploadComplete' : function(file, data) { console.log(data); }
                    });
                })
            });*/
        </script>


    <div class="tab-content">
        <div class="tab-pane active" id="home-view">
            <div class="block" style="overflow: hidden;">
                    <div class="col-sm-6 col-lg-3">
                        <!-- Widget -->
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_ready_article.php" class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                                    <i class="fa fa-file-text"></i>
                                </a>
                                <h3 class="widget-content text-right animation-pullDown">
                                    New <strong>Article</strong><br>
                                    <small>Mountain Trip</small>
                                </h3>
                            </div>
                        </div>
                        <!-- END Widget -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Widget -->
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_comp_charts.php" class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                    <i class="gi gi-usd"></i>
                                </a>
                                <h3 class="widget-content text-right animation-pullDown">
                                    + <strong>250%</strong><br>
                                    <small>Sales Today</small>
                                </h3>
                            </div>
                        </div>
                        <!-- END Widget -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Widget -->
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_ready_inbox.php" class="widget-icon pull-left themed-background-fire animation-fadeIn">
                                    <i class="gi gi-envelope"></i>
                                </a>
                                <h3 class="widget-content text-right animation-pullDown">
                                    5 <strong>Messages</strong>
                                    <small>Support Center</small>
                                </h3>
                            </div>
                        </div>
                        <!-- END Widget -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Widget -->
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_comp_gallery.php" class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                                    <i class="gi gi-picture"></i>
                                </a>
                                <h3 class="widget-content text-right animation-pullDown">
                                    +30 <strong>Photos</strong>
                                    <small>Gallery</small>
                                </h3>
                            </div>
                        </div>
                        <!-- END Widget -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Widget -->
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_comp_charts.php" class="widget-icon pull-left themed-background animation-fadeIn">
                                    <i class="gi gi-wallet"></i>
                                </a>
                                <div class="pull-right">
                                    <span id="mini-chart-sales"><canvas width="190" height="64" style="display: inline-block; vertical-align: top; width: 190px; height: 64px;"></canvas></span>
                                </div>
                                <h3 class="widget-content animation-pullDown visible-lg">
                                    Latest <strong>Sales</strong>
                                    <small>Per hour</small>
                                </h3>
                            </div>
                        </div>
                        <!-- END Widget -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Widget -->
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_widgets_stats.php" class="widget-icon pull-left themed-background animation-fadeIn">
                                    <i class="gi gi-crown"></i>
                                </a>
                                <div class="pull-right">
                                    <span id="mini-chart-brand"><canvas width="176" height="64" style="display: inline-block; vertical-align: top; width: 176px; height: 64px;"></canvas></span>
                                </div>
                                <h3 class="widget-content animation-pullDown visible-lg">
                                    Our <strong>Brand</strong>
                                    <small>Popularity over time</small>
                                </h3>
                            </div>
                        </div>
                        <!-- END Widget -->
                    </div>
                </div>
        </div>
    </div>
    <div class="tab-content" id="user-tab-content">
        <!-- <div class="tab-pane active" id="welcome">welcome</div> -->
        <!-- <div class="tab-pane" id="example-tabs-profile">Profile..</div>
        <div class="tab-pane" id="example-tabs-messages">Messages..</div> -->
    </div>
    
</div>
<script type="text/javascript">
    function eva (arg) {
        alert(arg);
    }
</script>
<!-- END Page Content -->
        <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <!-- <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a> -->

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->


        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="/Public/js/manage.js"></script>
        <script src="/Public/Proui/js/vendor/bootstrap.min.js"></script>
        <script src="/Public/Proui/js/plugins.js"></script>
        <script src="/Public/Proui/js/app.js"></script>
        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
        <script src="/Public/Proui/js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="/Public/Proui/js/pages/index.js"></script>
        <script>$(function(){ Index.init(); });</script>
    </body>
</html>