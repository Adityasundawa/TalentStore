<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $detect = new Mobile_Detect;
       echo "Biji";
        
        if($detect->isMobile()) {
            redirect('http://localhost/talentstore//');
        }
    }

}
