<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	#load_library dan helper yang dibutuhkan
	$this->load->library(array('table','form_validation'));
	$this->load->helper(array('form','url'));
	$this->load->model('login_user','',TRUE);
	$this->load->library('session');
	$this->load->helper('date');
}
public function login() {
        $this->load->model('login_user');
//          ambil detail data
            $user = $this->input->post('username');
            $pw = $this->input->post('password');
            $where = [
                'username' => $user,
                'password' => $pw,
            ];
            $cek = $this->login_user->cek_login("admin",$where)->num_rows();
            $getUser = $this->login_user->getAdminData("admin",$where)->result_array();
            // $result = $this->login_user->data_login($user, $pw);

//             if ($result) {
//             $data = array();
//             foreach($result as $row) {
//                 //create the session
//                 $data = array(
//                     // 'id' => $row->id_admin,
//                     'username'=>$row->username,
//                     'password'=>$row->password,
//                 );
// //            redirect ke halaman sukses
//             $this->session->set_userdata($data);
//             redirect('admin');
//         	}
//              return TRUE;
    		
//         } else {
// //            tampilkan pesan error
// 				 $data['error'] = 'Invalid Username/Password!';
// 				 $this->load->view('loginadmin', $data);
//         }
    }

public  function logout() {
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect('index');
    }
    public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->view('haladmin/index');
	}
}
