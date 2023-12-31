<?php
include_once("Koneksi.php");
class Siswa extends Database{

    function tampilDataSiswa(){
        $tampilDataSiswa = "SELECT * FROM siswa";
        return $this->db->query($tampilDataSiswa)->fetch_all(MYSQLI_ASSOC);
    }

    public function viewById($id){
        $dataSiswa = "SELECT * FROM siswa WHERE id_siswa = '$id'";
        return $this->db->query($dataSiswa)->fetch_assoc();
    }

    //function tambah siswa
    public function tambahSiswa($data_siswa)
    {
        $nama_siswa = $data_siswa["nama_siswa"];
        $kelas = $data_siswa["kelas"];
        $foto = $data_siswa["foto"];
        
        $query = "INSERT INTO siswa VALUES (NULL,'$nama_siswa', '$kelas', '$foto')";

    if($this->db->query($query) === TRUE){
        return mysqli_affected_rows($this->db);
        }

    }

    //function hapus siswa
    public function hapus_Siswa($data_siswa)
    {
        $query = "DELETE FROM siswa WHERE id_siswa='$data_siswa'";

        if($this->db->query($query) === TRUE){
            return mysqli_affected_rows($this->db);
        }
    }

    //function edit siswa
    public function edit_Siswa($data_siswa)
    {
        $id_siswa = $data_siswa["id_siswa"];
        $nama_siswa = $data_siswa["nama_siswa"];
        $kelas = $data_siswa["kelas"];
        $foto = $data_siswa["foto"];

        $query = "UPDATE siswa SET 
            nama_siswa = '$nama_siswa',
            kelas = '$kelas',
            foto = '$foto' WHERE id_siswa = '$id_siswa'";

        if($this->db->query($query) === TRUE){
            return "Berhasil";
        }return "Gagal";
    }

}

?>