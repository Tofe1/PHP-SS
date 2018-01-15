<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
		'__PUBLIC__' => SITE_URL.'/Application/Admin/Public', // 更改默认的/Public 替换规则
	
		'__ADC__' => SITE_URL.'/Application/Admin/View'
	),
	
	'TMPL_PARSE_STRING'  =>array(
		'__IMG__'    => __ROOT__ .'/Application/'. MODULE_NAME . '/Public/img',
		'__JS__'    => __ROOT__ . '/Application/'. MODULE_NAME .   '/Public/js',
		'__CSS__'    => __ROOT__ . '/Application/'. MODULE_NAME .   '/Public/css',
		'__UP__'    => '/Public/Uploads/',
		'__INDEX__'    => '/Home/Index',
	),
    //设置布局
	
);
