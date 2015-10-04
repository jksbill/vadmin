<?php
    return array(
        'TEMPLATE' => array(
            'name'          => 'vsonter',
            'version'       => '1.2',
            'author'        => 'vsonter',
            'robots'        => 'noindex, nofollow',
            'title'         => '珠海威信特公司后台管理',
            'description'   => '珠海一流的网站建设，珠海微信开发，珠海微网站开发，珠海app开发，珠海威信特网络科技有限公司，拥有多年网站开发经验，值得信赖',
            
            'header_navbar' => 'navbar-default',
            
            'header'        => '',
            
            'sidebar'       => 'sidebar-partial sidebar-visible-lg sidebar-no-animations',
            
            'footer'       => '',
            
            'main_style'    => '',
            
            'theme'         => '',
            
            'header_content'=> '',
            'active_page'   => basename($_SERVER['PHP_SELF'])
        ),

        
        'PRIMARY_NAV' => array(
            array(
                'name'  => 'Dashboard',
                'en_name'  => 'Dashboard',
                'url'   => '/manage/index/test',
                'class'  => 'ajaxLink',
                'icon'  => 'gi gi-stopwatch'
            ),
            array(
                'name'  => 'Widget Kit',
                'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>' .
                           '<a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a>',
                'url'   => 'header',
            ),
            array(
                'name'  => 'Statistics',
                'en_name'  => 'Statistics',
                'url'   => '/manage/index/test1',
                'class'  => 'ajaxLink',
                'icon'  => 'gi gi-charts'
            ),
            array(
                'name'  => 'Media',
                'en_name'  => 'Media',
                'url'   => '/manage/index/test2',
                'class'  => 'ajaxLink',
                'icon'  => 'gi gi-film'
            ),
            array(
                'name'  => 'Design Kit',
                'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>',
                'url'   => 'header'
            ),
            
            array(
                'name'  => 'Forms',
                'icon'  => 'gi gi-notes_2',
                'sub'   => array(
                    array(
                        'name'  => 'General',
                        'en_name'  => 'General',
                        'url'   => '/manage/index/test3',
                        'class'  => 'ajaxLink',
                    ),
                    array(
                        'name'  => 'Components',
                        'url'   => 'page_forms_components.php'
                    ),
                    array(
                        'name'  => 'Validation',
                        'url'   => 'page_forms_validation.php'
                    ),
                    array(
                        'name'  => 'Wizard',
                        'url'   => 'page_forms_wizard.php'
                    )
                )
            ),
            array(
                'name'  => 'Icon Sets',
                'icon'  => 'gi gi-cup',
                'sub'   => array(
                    array(
                        'name'  => 'Font Awesome',
                        'url'   => 'page_icons_fontawesome.php'
                    ),
                    array(
                        'name'  => 'Glyphicons Pro',
                        'url'   => 'page_icons_glyphicons_pro.php'
                    )
                )
            ),
            array(
                'name'  => 'Develop Kit',
                'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>',
                'url'   => 'header',
            ),
            array(
                'name'  => 'Social',
                'en_name'  => 'Social',
                'url'   => '/manage/index/test4',
                'class'  => 'ajaxLink',
                'icon'  => 'gi gi-share_alt'
            ),
        ),
    );