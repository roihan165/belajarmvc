<?php
    class App{
        public function __construct()
        {
            $url = $this->parseUrl();
            var_dump($url);
            echo ($url);
        }

        public function parseURL(){
            if (isset($_GET['url'])){
                // Ambil value url
                $url = $_GET['url'];
                // Buang tanda '/' di akhir url
                $url = rtrim($url,'/');
                // Filter url dari karakter aneh
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // Pecal url berdasarkan tanda '/' sebagai pemisah
                $url = explode('/',$url);

                return $url;
            }
        }
    }
?>