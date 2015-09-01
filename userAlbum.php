<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userAlbum
 *
 * @author abu wahid
 */
require_once 'photoalbumDatabase.php';

class userAlbum extends photoalbumDatabase {

    /**
     * 
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * 
     * @param type $email string
     * @return type 
     */
    public function albumExist($email) {
        try{
            $conn = parent::connectDb();
            $qString = "SELECT `user_id` FROM `user-info` WHERE `user_email` = :user_email";
            $q = $conn->prepare($qString);
            $q->execute(array("user_email" => $email));
            return $q->fetchColumn();
        }  catch (Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
    

}

?>
