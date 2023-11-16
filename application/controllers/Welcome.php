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
	public function climate()
	{
		
		$this->load->view('header');
		$this->load->view('climate'); // view page name
		$this->load->view('footer');
	}
	public function criticalEmergingTechnologies()
	{
		
		$this->load->view('header');
		$this->load->view('critical-emerging-technologies'); // view page name
		$this->load->view('footer');
	}
	public function cyber()
	{
		
		$this->load->view('header');
		$this->load->view('cyber'); // view page name
		$this->load->view('footer');
	}
	public function healthSecurityPartnership()
	{
		
		$this->load->view('header');
		$this->load->view('health-security-partnership'); // view page name
		$this->load->view('footer');
	}
	public function infrastructure()
	{
		
		$this->load->view('header');
		$this->load->view('infrastructure'); // view page name
		$this->load->view('footer');
	}
	public function space()
	{
		
		$this->load->view('header');
		$this->load->view('space'); // view page name
		$this->load->view('footer');
	}
	public function indoPacificPartnership()
	{
		
		$this->load->view('header');
		$this->load->view('indo-pacific-partnership-for-maritime-domain-awareness'); // view page name
		$this->load->view('footer');
	}
	public function stemFellowships()
	{
		
		$this->load->view('header');
		$this->load->view('stem-fellowships'); // view page name
		$this->load->view('footer');
	}
	public function counterTerrorism()
	{
		
		$this->load->view('header');
		$this->load->view('counter-terrorism'); // view page name
		$this->load->view('footer');
	}
	public function mediaResources()
	{
		
		$this->load->view('header');
		$this->load->view('media-resources'); // view page name
		$this->load->view('footer');
	}
	public function contactUs()
	{
		
		$this->load->view('header');
		$this->load->view('contact-us'); // view page name
		$this->load->view('footer');
	}
}
