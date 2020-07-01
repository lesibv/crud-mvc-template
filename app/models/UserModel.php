<?php
/**
 * Class for User model
 */
require BASE_PATH . '/core/Model.php';

class UserModel extends Model
{
    function __construct($table = 'user')
    {
        $this->table = $table;
    }

    public function getAll()
    {
        $conn     = $this->connectDB();
        $result   = null;

        if ($conn) {
            $sql      = "SELECT * FROM ".$this->table." ORDER BY id ASC";
            $resource = $conn->query($sql);
            if ($resource) {
                $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return $result;
    }

    public function getByID($id)
    {
        $conn   = $this->connectDB();
        $result = array();

        if ($conn)
        {
            $sql        = "SELECT * FROM ".$this->table." WHERE id = ".$id;
            $resource   = $conn->query($sql);
            $result     = $resource->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result ? $result[0] : array();
    }

    public function insert($data = array())
    {
        $conn   = $this->connectDB();
        $result = false;

        if ($conn)
        {
            $sql = "INSERT INTO {$this->table} (first_name, last_name, email)
                    VALUES (?,?,?)";

            $result = $conn->prepare($sql)->execute([
              $data['first_name'], $data['last_name'], $data['email']
            ]);
        }
        return $result;
    }

    public function update($data)
    {
        $result = false;
        $conn   = $this->connectDB();

        if ($conn) {
            $sql = "UPDATE {$this->table}
                    SET first_name=?, last_name=?, email=?
                    WHERE id=?";
            $result = $conn->prepare($sql)->execute([
                $data['first_name'], $data['last_name'], $data['email'], $data['id']
            ]);
        }

        return $result;
    }

    public function delete($id)
    {
        $conn   = $this->connectDB();
        $result = false;

        if ($conn)
        {
            $sql      = "DELETE FROM {$this->table} WHERE id=?";
            $result   = $conn->prepare($sql)->execute([$id]);
        }

        return $result;
    }
}
