<?php
/**
  * 至简PHP开源框架
  * 版本：至简初学版
  * 官方网站：https://github.com/dengdaiderizi521/zhijian
  * 日期：2015-05-01
  * 示例文件，如果需要测试数据库，请解开调取model的注释，并在baseModel中设置数据库信息
  */
class Home extends BaseController{
	function index(){

		//调用模型有两种方法第一种
		// $obj = $this->getModel('home');
		// $data = $obj->getTestData();
		
		//第二种调用模型方法
		// $this->getModel('home');
		// $data = $this->home->getTestData();
		
		//设置模版变量
		$this->set('variableName','至简PHP开源框架初学版');
		//载入模版
		$this->view('home');
	}
}
?>