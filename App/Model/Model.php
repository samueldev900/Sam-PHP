<?php

namespace App\Model;

use App\Core\Database;

abstract class Model
{
    private static $conn;

    protected static array $columns = [];

    protected static string $table = '';

    private static string $fields = '';

    protected static function bootConnection()
    {
        if (!static::$conn) {
            static::$conn = Database::getInstance();
        }

        if (!static::$columns) {
            static::$columns = ['*'];
        }
    }

    public static function all()
    {
        static::bootConnection();

        $query = "SELECT";

        foreach (static::$columns as $column) {
            self::$fields .= " " . $column . ",";
        }
        
        $query .= trim(self::$fields, ',');
        $query .= " FROM " . static::$table;

        //echo $query;

        $result = static::$conn->query($query);
        $result = $result->fetchAll();

        print_r($result);
    }

    public static function create() {}

    public static function find() {}

    public static function update() {}
    public static function delete() {}
}
