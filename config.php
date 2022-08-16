<?php
   
    function apiTmdb(){
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=70cdeab72720dc1a144f4d142a9189c6&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2022&with_original_language=id";
        $file = file_get_contents($url);
    }

    function apiConnect(){
        $apiCnn = apiTmdb();
        var_dump($apiCnn);
        if ($apiCnn) {
            die('API Bermasalah');
        }
        $json = json_decode($file, true);
        return $apiCnn;
    }


    function callAPI(){
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=70cdeab72720dc1a144f4d142a9189c6&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2022&with_original_language=id";
        $curl = curl_init();
        
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
           'APIKEY: 111111111111111111111',
           'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){die("Connection Failure");}
        curl_close($curl);
        return $result;
     }


?>