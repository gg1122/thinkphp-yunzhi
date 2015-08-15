<?php
return array(
	'URL_MODEL'             =>  2, //URL模式
	'DEFAULT_MODULE'		=>  'Home', //默认模块
	'ACTION_SUFFIX'         =>  'Action', // 操作方法后缀
	'DEFAULT_THEME'			=>	'Default',//设置主题
	'SHOW_ERROR_MSG'        =>  true,//显示错误信息，成功布署后需要注释掉
	'TAGLIB_PRE_LOAD' 		=> 	'html',
	'TMPL_PARSE_STRING'  =>array(
         '__PUBLIC__' => __ROOT__, // 更改默认的/Public 替换规则
         '__JS__'     => __ROOT__ . '/Js/', // 增加新的JS类库路径替换规则
         '__UPLOAD__' => __ROOT__ . '/Uploads', // 增加新的上传路径替换规则
         ),
	);