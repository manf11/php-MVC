<?php

class About extends Controller{
    public function index($nama = 'ahlis',$cita = 'fullstak woii',$umur = 23)
    {
        $data['nama']=$nama;
        $data['cita-cita']=$cita;
        $data['umur']=$umur;
        $data['judul']='About Me';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul']='Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}