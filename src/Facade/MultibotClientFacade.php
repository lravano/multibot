<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MultibotClientFacade
 *
 * @author lrava 
 */
namespace Made\Multibot\Facade;


use Illuminate\Support\Facades\Facade;

class MultibotClientFacade extends Facade {
   
    protected static function getFacadeAccessor() { return 'multibot_client'; }
    
}
