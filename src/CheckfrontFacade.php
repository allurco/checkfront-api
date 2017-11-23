<?php 

namespace Allurco\Checkfront;

use \Illuminate\Support\Facades\Facade;

class CheckfrontFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'CheckfrontAPI';
    }
}