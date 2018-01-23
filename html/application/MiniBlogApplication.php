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
            '/user/:user_name'
                => ['controller' => 'status', 'action' => 'user'],
            'user/:user_name/status/:id'
                => ['controller' => 'status', 'action' => 'show'],
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