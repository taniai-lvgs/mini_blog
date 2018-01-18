<?php

class MiniBlogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return [
            '/'
                => ['controller' => 'status', 'action' => 'index'],
            '/status/post'
                => ['controller' => 'status', 'action' => 'post'],
            '/account'
                => ['controller' => 'account', 'action' => 'index'],
            'account/:action'
                => ['controller' => 'account'],
        ];
    }

    protected function configure()
    {
        $this->db_manager->connect('master', [
            'dsn'      => 'mysql:dbname=mini-blog_db;host=localhost',
            'user'     => 'root',
            'password' => ''
        ]);
    }
}