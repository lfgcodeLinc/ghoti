<?
/*
 *A class file to connect to a database
 */

 class DB_CONNECT{
    //constructor
    function _construct(){
        //connecting to database
        $this->connect();
    }
    function _destruct(){
            //connecting to database
            $this->closet();
    }
    function connect(){
        //import database connection variables
        require_once _DIR_ . '/db_config.php';

        //Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        //Selecting database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

        //return connection cursor
        return $con;
    }
    function connect(){
            //close database connection
            mysql_close();
    }
 }
?>