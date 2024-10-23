<?php


class Home extends Controller
{

    public function index(){
        $data['data1'] = 'Pemograman website';
        $data['data2'] = 'Kelas IS3';
        $data['judul'] = 'Halaman Home';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }

}

?>