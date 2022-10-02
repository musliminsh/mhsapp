<?php

class Mahasiswa extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        //memanggil file MahasiswaModel pada folder models
        $this->load->library('form_validation');
    } 
    public function index()
    {
        if ($this->session->userdata('status') != "login") {             
            return redirect(base_url("auth/index")); 
        } 

        $data['judul'] = "Halaman Mahasiswa"; //mengganti title pada website
        $data['mahasiswa']=$this->MahasiswaModel->getAllMahasiswa(); //memanggil fungsi pada model Mahasiswamodel
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->MahasiswaModel->cariDataMahasiswa();
        }
        $this->load->view('layout/header', $data);
        $this->load->view('mahasiswa', $data); //data yang diambil adalah data mahasiswa
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
    $data['judul'] = "Tambah Data Mahasiswa"; //mengganti title pada website
    
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'NIM', 'required');
    $this->form_validation->set_rules('email', 'E-Mail', 'required');

    if ($this->form_validation->run() == FALSE) {
    $this->load->view('layout/header', $data);
    $this->load->view('tambah'); //memanggil tampilan tambah
    $this->load->view('layout/footer');
    } else {
        $this->MahasiswaModel->tambahDataMahasiswa();//memanggil model MahasiswaModel.php dengan fungsi tamabah 
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('mahasiswa');//untuk menampilkan view mahasiswa
    }
    }
    public function hapus($id)
    {
        $this->MahasiswaModel->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Data Mahasiswa";
        $data['mahasiswa'] = $this->MahasiswaModel->getMahasiswaById($id);
        $this->load->view('layout/header.php', $data);
        $this->load->view('detail', $data);
        $this->load->view('layout/footer.php');
    }
    public function edit($id)
    {
        $data['judul'] = "Edit Data Mahasiswa";
        $data['mahasiswa'] = $this->MahasiswaModel->getMahasiswaById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('edit',$data);
            $this->load->view('layout/footer');
        } else {
            $this->MahasiswaModel->editDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('mahasiswa');
        }
    }
}