<?php

class About{
    public function index(){
        echo "Anda Masuk Class About dan Method index";
    }

    public function page($name = 'Roy',$pekerjaan = 'USA'){
        echo "Halo, nama saya $name, saya adalah seorang $pekerjaan";
    }

}