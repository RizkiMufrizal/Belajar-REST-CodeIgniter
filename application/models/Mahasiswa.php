<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Model {

  public function getCountMahasiswa()
  {
      return $this->db->count_all_results('mahasiswa', FALSE);
  }

  public function getMahasiswa($page, $size)
  {
      return $this->db->get('mahasiswa', $size, $page);
  }

  public function insertMahasiswa($dataMahasiswa)
  {
      $val = array(
        'npm' => $dataMahasiswa['npm'],
        'nama' => $dataMahasiswa['nama'],
        'kelas' => $dataMahasiswa['kelas'],
        'tanggalLahir' => $dataMahasiswa['tanggalLahir']
      );
      $this->db->insert('mahasiswa', $val);
  }

  public function updateMahasiswa($dataMahasiswa, $npm)
  {
    $val = array(
      'nama' => $dataMahasiswa['nama'],
      'kelas' => $dataMahasiswa['kelas'],
      'tanggalLahir' => $dataMahasiswa['tanggalLahir']
    );
    $this->db->where('npm', $npm);
    $this->db->update('mahasiswa', $val);
  }

  public function deleteMahasiswa($npm)
  {
    $val = array(
      'npm' => $npm
    );
    $this->db->delete('mahasiswa', $val);
  }

}
