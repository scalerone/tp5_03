<?php

return [
	// 默认模块名
	'default_module'         => 'admin',
	// 禁止访问模块
	'deny_module_list'       => ['common'],
	// 默认控制器名
	'default_controller'     => 'Login',
	// 默认操作名
	'default_action'         => 'login',
	// 默认验证器
	'default_validate'       => '',
	// 默认的空控制器名
	'empty_controller'       => 'Error',
	// 操作方法后缀
	'action_suffix'          => '',
	// 自动搜索控制器
	'controller_auto_search' => false,
    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => '../tpl/admin/',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ],
    
	
		];