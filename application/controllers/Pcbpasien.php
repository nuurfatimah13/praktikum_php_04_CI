<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pcbpasien extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{


        
		$this->load->model('PasienM','pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->kode = '0001A';
        $this->pasien1->nama = 'Reni Putri';
        $this->pasien1->tmp_lahir = 'Kuala Lumpur';
        $this->pasien1->tgl_lahir = '30 Maret 2002';
        $this->pasien1->gender = 'P';
        $this->pasien1->email = 'putri.reni30@gmail.com';
        
        // $this->load->model('PasienM','pasien2');
        // $this->pasien2->id = 2;
        // $this->pasien2->kode = '0002A';
        // $this->pasien2->nama ='Anindi Syafitri';
        // $this->pasien2->tmp_lahir = 'Istanbul';
        // $this->pasien2->tgl_lahir = '3 Juli 2011';
        // $this->pasien2->gender = 'P';
        // $this->pasien2->email = 'nindi20syaf@gmail.com';

        // $this->load->model('PasienM','pasien3');
        // $this->pasien3->id = 3;
        // $this->pasien3->kode = '0003A';
        // $this->pasien3->nama = 'Johanes Sianturi';
        // $this->pasien3->tmp_lahir = 'Liverpool';
        // $this->pasien3->tgl_lahir = '14 September 2001';
        // $this->pasien3->gender = 'L';
        // $this->pasien3->email = 'sianturi.johanes01@gmail.com';

        // $this->load->model('PasienM','pasien4');
        // $this->pasien4->id = 4;
        // $this->pasien4->kode = '0004A';
        // $this->pasien4->nama = 'M. Deni Ruhiyat';
        // $this->pasien4->tmp_lahir = 'Amsterdam';
        // $this->pasien4->tgl_lahir = '17 Januari 2001';
        // $this->pasien4->gender = 'L';
        // $this->pasien4->email = 'deniruhiyat17@gmail.com';

        $list_pasien = [$this->pasien1];
        $data['list_pasien']=$list_pasien;
        
        $this->load->view('layouts/head');
        $this->load->view('pcbpasien/index', $data);
        $this->load->view('layouts/footer');
	}

	public function about() {
		echo "Halaman About";
	}
}
