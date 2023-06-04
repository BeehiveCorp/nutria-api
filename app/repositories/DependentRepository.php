<?php

class DependentRepository {
  static private $pdoConn = null;
  static private $table = "DEPENDENTS";

  
  function __construct(PDO $connection) {
    self::$pdoConn = $connection;
  }

  static function all() {
    $sql = 'SELECT * FROM ' . self::$table;
    $stmt = self::$pdoConn->prepare($sql);
    
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}