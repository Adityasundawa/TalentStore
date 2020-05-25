<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    
    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $detect = new Mobile_Detect;
        redirect('m/beranda','refresh');
        if($detect->isMobile()) {
            redirect('http://localhost/talentstore//');
        }
    }

}
