<?php
/**
 * @author Myothu
 * ä½œæˆ�æ—¥æ™‚ 2014/03/05 11:04:32
 */
class My_Controller extends CI_Controller {
	
	public $title = '';
	public $javascript = array();
	public $screen = '';
	public $view_name = '';
	public $view_layout = 'login';
	public $login_check = TRUE;
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set("Asia/Rangoon");
	}
	public function is_logined(){}
	public function get_cur_date(){
		return date("Y-m-d");
	}
  public function get_cur_datetime(){
    return date("Y-m-d H:i:s");
  }
	public function geturl(){
		$base_dir  = __DIR__;
		$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
		$domain    = $_SERVER['SERVER_NAME'];
		$file_path = $_SERVER['DOCUMENT_ROOT'];
		$port = $_SERVER['SERVER_PORT'];
		$full_url  = "${protocol}://${domain}:${port}";
		return $full_url;
	}

	public function get_user_id(){}
	protected function post($param){
		return  json_decode($this->input->post($param));
	}
	public function set($work){
		if(!$this->screen){return;}
		$this->session->set_userdata(array($this->screen => $work));
	}
	public function get(){
		if(!$this->screen){return;}
		$work = $this->session->userdata($this->screen);
		return $work;
	}
	public function view($data = NULL){

		if($this->view_layout == 'page'){
			$this->load->view('layout_view',array('data'=>$data));
			return;
		}else{
			$this->load->view('admin_layout_view',array('data'=>$data));
			return;
		}
	}
	private function d($str){
		echo '<pre>';
		print_r($str);
		echo '</pre>';
	}
}
