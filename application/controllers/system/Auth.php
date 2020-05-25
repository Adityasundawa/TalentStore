<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('passswprd');


		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			
			if ($user['active'] == 1) {
				# code...
			}
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/system/Auth.php */