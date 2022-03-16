<?php

class Mahasiswa extends CI_Controller{
    public function index(){
        $this->load->model('m_mahasiswa');
        $mahasiswa = $this->m_mahasiswa->getAll()->result();
        $data['mahasiswa'] = $mahasiswa;
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');

    }

    public function add(){
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/add');
        $this->load->view('layout/footer');
    }

    public function doadd(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $semester= $this->input->post('semester');
        $ipk = $this->input->post('ipk');

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'semester' => $semester,
            'ipk' => $ipk
        );

        $this->load->model('m_mahasiswa');
        $this->m_mahasiswa->insertData($data);
        redirect('mahasiswa');

    }

    public function edit($id){
        $this->load->model('m_mahasiswa');
        $mhs = $this->m_mahasiswa->getData($id)->row();
        $data['mhs'] = $mhs;

        $this->load->view('layout/header');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('layout/footer');
    }

    public function doedit($id){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $semester= $this->input->post('semester');
        $ipk = $this->input->post('ipk');

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'semester' => $semester,
            'ipk' => $ipk
        );

        $this->load->model('m_mahasiswa');
        $this->m_mahasiswa->updateData($id,$data);
        redirect('mahasiswa');

    }

    public function delete($id){
        $this->load->model('m_mahasiswa');
        $this->m_mahasiswa->deleteData($id);
        redirect('mahasiswa');
    }

}