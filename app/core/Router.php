<?php
namespace App\Core;

Class Router {

    protected $request_uri;

    protected $url;

    protected $file_path;

    public function __construct($request){
        $this->request_uri = str_replace('/', '', $request);
    }

    public function get($url, $file_path){
        if($this->request_uri == $url){
            $this->url = $url;
            $this->file_path = $file_path;
        }
    }

    public function run(){
        if($this->url != null){
            return require_once "views/".$this->file_path;
        }

        return require_once "views/errors/404.html";
    }
}