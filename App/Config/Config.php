<?php namespace App\Config;

class Config {
    public function getDBArray() {
        return array(
            'URL'=>'http://127.0.0.1/Able_Movers/',
            'DB_TYPE' => 'mysql',
            'DB_HOST' => '127.0.0.1',
            'DB_NAME' => 'Bacenta_System',
            'DB_USER' => 'root',
            'DB_PASS' => ''
        );
    }
}
