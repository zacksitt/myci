<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends MY_Controller {
  public $title="My CI";
  public $view_layout = 'page';
  public $view_name = 'my_view';
  public $login_check = FALSE;
  public $javascript = array('');
  public $data = array();

  public function __construct()
	{
		parent::__construct();
		//load model
	}

  public function Index(){
      $this->lang->load('front','my');
      $data['msg'] = "hello";
      $this->view($data);
  }
}
