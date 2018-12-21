<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('cas');
	}

	public function index()
	{
		echo '<pre>Welcome! Click <a href="'.site_url('auth/sso').'">here</a> to sign in.</pre>';
	}

	public function sso()
	{
		$this->cas->force_auth();

		$attributes = $this->cas->user()->attributes;

		var_dump($attributes);
	}

}
