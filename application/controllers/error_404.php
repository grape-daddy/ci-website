<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Error_404 extends CI_Controller
{
    function __construct() {
        parent::__construct();
		//$this->load->library();
		//$this->load->helper();
		//$this->load->model();

    }
    
    public function index()
    {
        $data['meta'] = array(
			'title' => 'Untitled | by Codeigniter',
			'description' => '',
			'keywords' => '',
			'robots' => 'noindex, nofollow',
            'generator' => 'Komodo Edit',
			'author' => '1allhosting.com',
            'copyright' => '&copy; 2002 - '.date("Y").' 1allhosting.com'
		);
        
        $this->load->view('error_404', $data);        
    }
}

/* End of file _.php */
/* Location: ./application/controllers/_.php */
