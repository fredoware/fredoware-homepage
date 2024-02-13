<?php
class Database
{
    // private static $dbName = 'fredoware.db' ;
    // private static $dbHost = 'localhost' ;
    // private static $dbUsername = 'root';
    // private static $dbUserPassword = '';
    // private static $port = '';


    private static $dbName = 'u437487943_fredowaredb' ;
    private static $dbHost = 'fredoware.com' ;
    private static $dbUsername = 'u437487943_fredowaresql';
    private static $dbUserPassword = 'feZxmasqw1212!@!@';
    private static $port = '';

    private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO("mysql:host=".self::$dbHost.";port=".self::$port.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
