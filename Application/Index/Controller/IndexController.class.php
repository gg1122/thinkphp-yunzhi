<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller{
	/**
	 * [indexAction description]
	 * @param  integer $p [description]
	 * @return [type]     [description]
	 */
	public function indexAction($code = 0)
	{  
		echo "变量CODE的值为：$code";
		echo I('get.code');
		trace('这个应该是变量值','这个应该是名字');
	}
}