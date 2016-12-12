<?php
namespace app\common\controller ;

use app\common\controller\BaseController;

class AdminBaseController extends BaseController {
	
	
	
	public function __construct(){
		parent::__construct();
		
	}
	/**
	 * 初始化方法
	 */
	public function _initialize(){
	    parent::_initialize();
	     
	}
	
	/**
	 * 检查用户登录
	 */
	protected function check_login(){
	    if(!isset($_SESSION["user"])){
	    	$isAjax = $this->request->isAjax() ;
	        if (!$isAjax) {
	        	$_SESSION['login_http_referer'] = $_SERVER['REQUEST_URI'];
	        }
//			$this->redirect('user/login', []);
	        $this->error('您还没有登录！',url('user/login'), ['code'=>401]);
	    }
	
	}
	/**
	 * 检查用户状态
	 */
	protected function  check_user(){
	    //$user_status=db('sm_user')->where(array("id"=>$this->getSessionUid()))->value("I_islock");
	    if (isset($_SESSION['user']) && isset($_SESSION['I_islock'])) {
		    $user_status = $_SESSION["user"]['I_islock'];
		    if($user_status==1){
		        $this->error('此账号已经被禁止使用，请联系管理员！',"/", ['code'=>403]);
		    }
	    }
	}
	
	/**
	 * 获取session用户
	 * @return user
	 */
	protected function getSessionUser(){
		return $_SESSION['user'];
	}
	/**
	 * 获取session用户ID
	 * @return uid
	 */
	protected function getSessionUid(){
		$user = $this->getSessionUser();
		return $user['id'];
	}
	/**
	 * 获取session用户名称
	 */
	protected function getSessionUname(){
		$user = $this->getSessionUser();
		return iseta($user,'Vc_name');
	}
	
	
}