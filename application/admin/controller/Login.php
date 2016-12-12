<?php
/*
 * Login.php
 * 
 * Copyright Sichuan Great Wall Software Technology Co.,LTD. All Rights Reserved.
 * Author sakura 2016年7月5日下午3:23:11
 */

namespace app\admin\controller ;


use app\common\controller\AdminBaseController;
class Login extends AdminBaseController{
	
		
	public function _initialize() {
		parent::_initialize();
	}
	
	public function login(){
	    
// 		return $this->fetch("/login");
		return $this->fetch("/index");
	}
	
}