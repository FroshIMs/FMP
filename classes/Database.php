<?php
  class Database {

    public static $host = "127.0.0.1";
    public static $dbName = "";
    public static $username = "";
    public static $password = "";

    private static function connect() {
      $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    }

  }
