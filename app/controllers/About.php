<?php

class About{
    public function index($nama = 'ahlis',$cita = 'fullstak woii',$umur = 23)
    {
        echo "halo saya $nama ,cita-cita $cita.umur $umur tahun. ";
    }
    public function page()
    {
        echo 'About/page';
    }
}