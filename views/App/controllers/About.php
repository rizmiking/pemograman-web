<?php

class About extends Controller{

  
    public function index($page1='akew',$page2='kampung'){
        
        $data['data1'] = 'Abdul hakim';
        $data['data2'] = 'bandung edann';
        $data['judul'] = 'Halaman About';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page(){
        $data['data1'] = 'Abdul hakim';
        $data['data2'] = 'bandung edann';
        $data['judul'] = 'Halaman About';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer', $data);
    }
}

?>