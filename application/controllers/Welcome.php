<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function aboutUs()
	{
		
		$this->load->view('header');
		$this->load->view('about'); // view page name
		$this->load->view('footer');
	}
	public function leaders()
	{
		
		$this->load->view('header');
		$this->load->view('leaders'); // view page name
		$this->load->view('footer');
	}
	public function foreignMinisters()
	{
		
		$this->load->view('header');
		$this->load->view('foreign-ministers'); // view page name
		$this->load->view('footer');
	}
}
