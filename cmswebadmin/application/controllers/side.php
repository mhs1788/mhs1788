 
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
/**
 * 사용자 인증 컨트롤러
 */
 
class Side extends CI_Controller {
 
    function __construct() {
        parent::__construct();   
    }
 
    public function side() {
        $this -> home();
    }
 
   
    /**
     * 로그인 처리
     */
    public function home() {
            $this -> load -> view('/side/side');
       
    }
 
   
 
}
 

