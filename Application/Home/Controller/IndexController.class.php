<?php
namespace Home\Controller;
use Think\Page;
class IndexController extends HomeController
{
	public function indexAction()
	{
		$page = new Page(100);
		$str = $page->show();
		$this->assign('page',$str);
            		$this->display('index');
	}
}