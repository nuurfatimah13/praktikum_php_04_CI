<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmipasien extends CI_Controller {

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
        $this->pasien1->nama = 'Reni Putri';
        $this->pasien1->kode = '0001A';
        $this->pasien1->gender = 'P';
        $this->pasien1->tmp_lahir = 'Kuala Lumpur';
        $this->pasien1->tgl_lahir = '30 Maret 2001';
        $this->pasien1->email = 'putri.reni30@gmail.com';
    

        $this->load->model('PasienM','pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->nama ='Anindi Syafitri';
        $this->pasien2->kode = '0002A';
        $this->pasien2->gender = 'P';
        $this->pasien2->tmp_lahir = 'Istanbul';
        $this->pasien2->tgl_lahir = '3 Juli 2011';
        $this->pasien2->email = 'nindi20syaf@gmail.com';
       

        $this->load->model('PasienM','pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->nama = 'Johanes Sianturi';
        $this->pasien3->kode = '0003A';
        $this->pasien3->gender = 'L';
        $this->pasien3->tmp_lahir = 'Liverpool';
        $this->pasien3->tgl_lahir = '14 September 2001';
        $this->pasien3->email = 'sianturi.johanes01@gmail.com';
        

        $this->load->model('PasienM','pasien4');
        $this->pasien4->id = 4;
        $this->pasien4->nama = 'M. Deni Ruhiyat';
        $this->pasien4->kode = '0004A';
        $this->pasien4->gender = 'L';
        $this->pasien4->tmp_lahir = 'Amsterdam';
        $this->pasien4->tgl_lahir = '17 Januari 2001';
        $this->pasien4->email = 'deniruhiyat17@gmail.com';
        



        $this->load->model('BmipasienM', 'bmipasien1');
        $this->bmipasien1->id = 1;
        $this->bmipasien1->tanggal_periksa = '2021-04-11';
        $this->bmipasien1->nama = 'Reni Putri';

        $this->load->model('BmiM', 'bmi1');
        $this->bmi1->berat = 50;
        $this->bmi1->tinggi = 145;
        
        $this->bmipasien1->bmi = '';

        $this->load->model('BmipasienM', 'bmipasien2');
        $this->bmipasien2->id = 2;
        $this->bmipasien2->tanggal_periksa = '2021-03-20';
        $this->bmipasien2->nama = 'Anindi Syafitri';

        $this->load->model('BmiM', 'bmi2');
        $this->bmi2->berat = 45;
        $this->bmi2->tinggi = 152;

        $this->bmipasien2->bmi = '';

        $this->load->model('BmipasienM', 'bmipasien3');
        $this->bmipasien3->id = 3;
        $this->bmipasien3->tanggal_periksa ='2021-05-22';
        $this->bmipasien3->nama = 'Johanes Sianturi';

        $this->load->model('BmiM', 'bmi3');
        $this->bmi3->berat = 78;
        $this->bmi3->tinggi = 165;

        $this->bmipasien3->bmi = '';

        $this->load->model('BmipasienM', 'bmipasien4');
        $this->bmipasien4->id = 4;
        $this->bmipasien4->tanggal_periksa= '2021-05-15';
        $this->bmipasien4->nama = 'M. Deni Ruhiyat';

        $this->load->model('BmiM', 'bmi4');
        $this->bmi4->berat = 64;
        $this->bmi4->tinggi = 172;

        $this->bmipasien4->bmi= '';


        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3, $this->pasien4];
        $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3, $this->bmipasien4];
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3, $this->bmi4];
        
        $data['list_pasien'] = $list_pasien;
        $data['list_bmipasien'] = $list_bmipasien;
        $data['list_bmi'] = $list_bmi;
        
        $this->load->view('layouts/head');
        $this->load->view('bmipasien/index', $data);
        $this->load->view('layouts/footer');




        
	}

	
		
	
}
