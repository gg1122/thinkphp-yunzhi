<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function _empty()
	{
		echo "你访问的方法不存在，或是定义有错误。";
	}
}