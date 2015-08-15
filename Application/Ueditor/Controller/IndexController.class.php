<?php
namespace Ueditor\Controller;
class IndexController{
	public function indexAction()
	{
		$data = new \Org\Util\Ueditor();
		echo $data->output();
	}
}