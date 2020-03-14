<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
Class Auth_m extends CI_Model {
    function __construct() {
        parent::__construct();
    }
 
    /**
     * 아이디 비밀번호 체크
     *
     * @param array $auth 폼 전송받은 아이디, 비밀번호
     * @return array
     */
    function login($auth) {
        $this->db->select("username, email", false);
        $this->db->where('username',  $auth['username']);
        $this->db->where('password', $auth['password']);
      

        $query = $this->db->get('users');

         
        if ($query -> num_rows() > 0) {
            
            return $query -> row();
            
        } else {            
            return FALSE;
        }
        
    }
 
}
