<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 21/03/2015
 * Time: 09:57
 */

class SimpleCurl {

    private $url;

    private $curl;

    public function __construct($url){

        $this->url = $url;

    }

    public function Fetch() {
        $data = null;
        $this->curl = curl_init($this->url);

        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array("User-Agent: php-curl"));
        $response = curl_exec($this->curl);
        $info = curl_getinfo($this->curl);

        if($info['http_code'] == 200) {
            $data = $response;
        }
        else {
            echo "Curl error: " . curl_error($this->curl);
        }
        curl_close($this->curl);

        return $data;
    }
}