<?php

class Database {

    private static $dbHost = "localhost";
    private static $dbName = "pokemon";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";
    private static $connection = null;
    
    public static function connect() {
        if(self::$connection == null) {
            try {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        return self::$connection;
    }

    public static function getPokemon(){
        $db = Database::connect();
        $executerRequeteSQL = $db->query("SELECT * FROM pokemon;");

        $recuperePokemon = $executerRequeteSQL;

        return $recuperePokemon;

    }

    public static function getPokemonById($infosPokemon) {
        $db = Database::connect();
        $executerRequeteSQL = ("SELECT * FROM pokemon WHERE num_poke = :id_page; ");

        $requete = $db->prepare($executerRequeteSQL);
        $requete->execute(array('id_page'=>$infosPokemon));

        $page = $requete;

        return $page;

    }

}

?>