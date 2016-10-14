<?php
class Induk extends CI_Model{
    function pemasukanindex()
    {
        $query=$this->db->query("SELECT * FROM `pemasukan` ORDER BY `pemasukan`.`nomor` DESC LIMIT 10");
        return $query->result();
    }
     function pengeluaranindex()
    {
        $query=$this->db->query("SELECT * FROM `pengeluaran` ORDER BY `pengeluaran`.`nomor` DESC LIMIT 10");
        return $query->result();
    }
    function pemasukan()
    {
        $query=$this->db->query("SELECT * FROM pemasukan");
        return $query->result();
    }
    function pengeluaran()
    {
        $query=$this->db->query("SELECT * FROM pengeluaran");
        return $query->result();    	
    }
    function user()
    {
        $query=$this->db->query("SELECT * FROM user");
        return $query->result();        
    }
    function lihatuser()
    {
        $usersebelum = $this->input->get('user', TRUE);
        $user = $this->db->escape($usersebelum);
        $query=$this->db->query("SELECT * FROM user WHERE username = ".$user);
        return $query->result(); 
    }
    function edituser()
    {
        
        $usersebelum = $this->input->get('user', TRUE);
        $user = $this->db->escape($usersebelum);
        $query=$this->db->query("SELECT * FROM user WHERE username = ".$user);
        return $query->result();
    }
    public function updateuser($id, $username, $password, $nama, $alamat, $kota, $provinsi, $hp)
    {
        $data = array (
            'username' => $username,
            'password' => $password,
            'namaasli' => $nama,
            'alamat' => $alamat,
            'kota' => $kota,
            'provinsi' => $provinsi,
            'hp' => $hp
            );
        $query = $this->db->update('user', $data, "id = ".$id);
        if($query)
        {
            echo "<script>alert('User Berhasil Disimpan !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Data User Gagal Tersimpan !');history.go(-1);</script>";

    }
    public function deleteuser($id){
        $sql = "delete from user where id = '".$id."'";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "<script>alert('Berhasil Menghapus User !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Gagal Menghapus User !');history.go(-1);</script>";

    }
     public function tambah_user($username, $password, $nama, $alamat, $kota, $provinsi, $hp)
    {
        $data = array (
            'username' => $username,
            'password' => $password,
            'namaasli' => $nama,
            'alamat' => $alamat,
            'kota' => $kota,
            'provinsi' => $provinsi,
            'hp' => $hp
            );
        $query = $this->db->insert('user', $data);
        if($query)
        {
            echo "<script>alert('User Berhasil Ditambahkan !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Data User Gagal Ditambahkan !');history.go(-1);</script>";

    }
     public function tambah_pemasukan($tanggal, $jumlah, $keterangan)
    {
        $data = array (
            'tanGgal' => $tanggal,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan
            );
        $query = $this->db->insert('pemasukan', $data);
        if($query)
        {
            echo "<script>alert('Data Berhasil Ditambahkan !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Data Gagal Ditambahkan !');history.go(-1);</script>";

    }
    function lihatpemasukan()
    {
        $nomorsebelum = $this->input->get('kode', TRUE);
        $nomor = $this->db->escape($nomorsebelum);
        $query=$this->db->query("SELECT * FROM pemasukan WHERE nomor = ".$nomor);
        return $query->result(); 
    }
    public function deletepemasukan($nomor){
        $sql = "delete from pemasukan where nomor = '".$nomor."'";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "<script>alert('Berhasil Menghapus Data !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Gagal Menghapus Data !');history.go(-1);</script>";

    }
     function editpemasukan()
    {
        
        $nomorsebelum = $this->input->get('kode', TRUE);
        $nomor = $this->db->escape($nomorsebelum);
        $query=$this->db->query("SELECT * FROM pemasukan WHERE nomor = ".$nomor);
        return $query->result();
    }
    public function updatepemasukan($nomor, $tanggal, $jumlah, $keterangan)
    {
        $data = array (
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan
            );
        $query = $this->db->update('pemasukan', $data, "nomor = ".$nomor);
        if($query)
        {
            echo "<script>alert('Data Berhasil Disimpan !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Data Gagal Tersimpan !');history.go(-1);</script>";

    }
         public function tambah_pengeluaran($tanggal, $jumlah, $keterangan)
    {
        $data = array (
            'tanGgal' => $tanggal,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan
            );
        $query = $this->db->insert('pengeluaran', $data);
        if($query)
        {
            echo "<script>alert('Data Berhasil Ditambahkan !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Data Gagal Ditambahkan !');history.go(-1);</script>";

    }
    function lihatpengeluaran()
    {
        $nomorsebelum = $this->input->get('kode', TRUE);
        $nomor = $this->db->escape($nomorsebelum);
        $query=$this->db->query("SELECT * FROM pengeluaran WHERE nomor = ".$nomor);
        return $query->result(); 
    }
    public function deletepengeluaran($nomor){
        $sql = "delete from pengeluaran where nomor = '".$nomor."'";
        $query = $this->db->query($sql);
        if($query)
        {
            echo "<script>alert('Berhasil Menghapus Data !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Gagal Menghapus Data !');history.go(-1);</script>";

    }
     function editpengeluaran()
    {
        
        $nomorsebelum = $this->input->get('kode', TRUE);
        $nomor = $this->db->escape($nomorsebelum);
        $query=$this->db->query("SELECT * FROM pengeluaran WHERE nomor = ".$nomor);
        return $query->result();
    }
    public function updatepengeluaran($nomor, $tanggal, $jumlah, $keterangan)
    {
        $data = array (
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan
            );
        $query = $this->db->update('pengeluaran', $data, "nomor = ".$nomor);
        if($query)
        {
            echo "<script>alert('Data Berhasil Disimpan !');history.go(-3);</script>";
            
        }
        else
            echo "<script>alert('Data Gagal Tersimpan !');history.go(-1);</script>";

    }

    function bulanpemasukan(){
        $tgl = date("Y-m-1");
        $tglx = date("Y-m-d");
        $query=$this->db->query("SELECT SUM(jumlah) AS total FROM pemasukan where tanggal > ".$tgl." and tanggal < ".$tglx."");
        $pemasukanbulan = $query->result();

    }
    public function cetak_pemasukan(){
        $tanggalmulai = $this->input->post('tanggalmulai', TRUE);
        $tanggalsampai = $this->input->post('tanggalsampai', TRUE);
        $query=$this->db->query("SELECT * FROM pemasukan where tanggal >= '$tanggalmulai' AND tanggal <= '$tanggalsampai'");
        return $query->result();
    }
    public function cetak_pemasukan_cetak(){
        $tanggalmulai = $this->input->get('tanggalmulai', TRUE);
        $tanggalsampai = $this->input->get('tanggalsampai', TRUE);
        $query=$this->db->query("SELECT * FROM pemasukan where tanggal >= '$tanggalmulai' AND tanggal <= '$tanggalsampai'");
        return $query->result();
    }
    public function cetak_pengeluaran(){
        $tanggalmulai = $this->input->post('tanggalmulai', TRUE);
        $tanggalsampai = $this->input->post('tanggalsampai', TRUE);
        $query=$this->db->query("SELECT * FROM pengeluaran where tanggal >= '$tanggalmulai' AND tanggal <= '$tanggalsampai'");
        return $query->result();
    }
    public function cetak_pengeluaran_cetak(){
        $tanggalmulai = $this->input->get('tanggalmulai', TRUE);
        $tanggalsampai = $this->input->get('tanggalsampai', TRUE);
        $query=$this->db->query("SELECT * FROM pengeluaran where tanggal >= '$tanggalmulai' AND tanggal <= '$tanggalsampai'");
        return $query->result();
    }
}