<?php 

namespace Allurco\Checkfront;

use Allurco\Checkfront\CheckfrontAPI;

class CheckfrontService {

    private $checkfront;

    function __construct($config=array(),$session_id='') {
        
        $this->checkfront = new CheckfrontAPI($config, $session_id);
    }

    function instance() {
        return $this->checkfront;
    }
 
}