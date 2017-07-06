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

    public function index()
    {

    }

}