<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller
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
        
        $this->load->view('welcome_message', $data);        
    }
	
	public function view($page = 'home')
    {		
		$data_theme = array(
			"theme" => "default"
		);
		
		$data['theme'] = $data_theme;
        $data['meta'] = array(
			'title' => 'Untitled | by Codeigniter',
			'description' => '',
			'keywords' => '',
			'robots' => 'noindex, nofollow',
            'generator' => 'Komodo Edit',
			'author' => '1allhosting.com',
            'copyright' => '&copy; 2002 - '.date("Y").' 1allhosting.com'
		);
		
		$file = FCPATH.'theme/'.$data_theme['theme'].'/template/pages/'.$page.'.php';
		
		if ( ! file_exists($file))
        {
                // Whoops, we don't have a page for that!
				//echo $page;
                //show_404();
				$this->load->view('error_404', $data);
				return false;
        }
		
		$this->load->language('common/header', 'english');
		$this->load->language('pages/'.$page, 'english');
		
        $data['heading'] = ucfirst($page); // Capitalize the first letter
		
		$data['page'] = $file;
        //$this->load->view('theme/default/common/header', $data);
        $this->load->view('page', $data);
        //$this->load->view('theme/default/common/footer', $data);
    }
	
}

/* End of file _.php */
/* Location: ./application/controllers/_.php */
