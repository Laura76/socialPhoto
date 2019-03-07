<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
        '__JS__' => __ROOT__.'/Apps/Admin/View/LoginAdmin/js',
        '__CSS__' => __ROOT__.'/Apps/Admin/View/LoginAdmin/css',
        '__IMG__' => __ROOT__.'/Apps/Admin/View/LoginAdmin/img',
        '__EDI__' => __ROOT__.'/Apps/Admin/View/LoginAdmin/editor',
    ),
    'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'localhost',// 服务器地址
	'DB_NAME'=>'think_home',// 数据库名
	'DB_USER'=>'root',// 用户名
	'DB_PWD'=>'123456',// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'think_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
);