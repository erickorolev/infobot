<?php
class InfobotAPI {
    private $url;
    private $key;
    private $timeout = 30;
    public $response;

    public function __construct($key, $url = 'https://client.infobot.pro/api/v1')
    {
        $this->url = $url;
        $this->key = $key;
    }

    public function getBalance(){
        return $this->method('balance');
    }

    public function getCallStatus($id){
        $params = array(
            'id' => $id,
        );
        return $this->method('getCallStatus',$params);
    }

    public function getCallStatusByUserId($custom_id){
        $params = array(
            'id' => $custom_id,
        );
        return $this->method('getCallStatusByUserId',$params);
    }

    public function getScenaries(){
        return $this->method('scenaries');
    }

    public function getCids(){
        return $this->method('cids');
    }

    public function sendMessage($params){
        return $this->method('send',$params);
    }

    public function getCalls($params){
        return $this->method('getCalls',$params);
    }

    private function method($method,$params = '{}'){
        if(is_array($params)){
            $params = json_encode($params);
        }
        $this->response = $this->curl($method,$params);
        return $this->response;
    }

    private function curl($method,$post_data = '')
    {
        $ch = curl_init("{$this->url}/{$method}/$this->key");
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $body = curl_exec($ch);
        curl_close($ch);
        return $body;
    }
}