<?php
/**
 * Created by PhpStorm.
 * User: XeloOw
 * Date: 05-07-17
 * Time: 11h01
 */

namespace App\Controller;


use Cake\Event\Event;

class HomeController extends AppController
{
    public function isAuthorized()
    {
        return true;
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['controller' => 'Home' , 'action' => 'index'], ['login','inscription', 'profil', 'reinitiliserMotDePasse']);
    }

    public function index()
    {

    }

}