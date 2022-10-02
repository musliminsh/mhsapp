<?php
class MahasiswaModel extends CI_Model
{
    public function getAllMahasiswa() 
    {
    return $this->db->get('mahasiswa')->result_array();
    //memanggil tabel mahadidwa di database mhs
    }
    public function tambahDataMahasiswa()
    {
    $data = [
    "nama" => $this->input->post('nama', true),
    "nim" => $this->input->post('nim', true),
    "email" => $this->input->post('email', true),
    "jurusan" => $this->input->post('jurusan', true)
    ];
    $this->db->insert('mahasiswa', $data);
    }
    public function hapusDataMahasiswa($id)
    {
    $this->db->where('id', $id);
    $this->db->delete('mahasiswa');
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }
    public function editDataMahasiswa()
    {
    $data = [
    "nama" => $this->input->post('nama', true),
    "nim" => $this->input->post('nim', true),
    "email" => $this->input->post('email', true),
    "jurusan" => $this->input->post('jurusan', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->or_like('nim', $keyword);
    $this->db->or_like('jurusan', $keyword);
    $this->db->or_like('email', $keyword);

    return $this->db->get('mahasiswa')->result_array();
    }


} 