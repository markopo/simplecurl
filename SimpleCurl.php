<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 21/03/2015
 * Time: 09:57
 */

/**
 * Class SimpleCurl
 */
class SimpleCurl {

    protected $url;

    private $curl;

    /**
     * @param $url
     */
    public function __construct($url){

        $this->url = $url;

    }

    /**
     * @return mixed|null
     */
    public function Fetch($headers = []) {
        $data = null;
        $this->curl = curl_init($this->url);

        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array("User-Agent: php-curl"));

        if(count($headers) > 0) {
            foreach ($headers as $header) {
                curl_setopt($this->curl, CURLOPT_HTTPHEADER, [$header]);
            }
        }

        $response = curl_exec($this->curl);
        $info = curl_getinfo($this->curl);

        if($info['http_code'] == 200) {
            $data = $response;
        }
        curl_close($this->curl);

        return $data;
    }

    /**
     * @param $data
     */
    public function Post($data){
        $this->curl = curl_init($this->url);
        curl_setopt($this->curl, CURLOPT_POST, true);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($this->curl);
    }
}