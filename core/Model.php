<?php
/**
 * Main model class
 */

require BASE_PATH . '/app/config.php';

class Model
{
    protected $table;

    function __construct()
    {

    }

    protected function connectDB()
    {
        try {
            $pdo = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
                DB_USER,
                DB_PASSWORD
            );
            return $pdo;
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}
