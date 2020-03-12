<?php require_once 'class/Connection.php';

class Talent
{
    public $id;
    public $name;
    public $gender;
    public $email;
    public $address;
    public $height;

    public function listAll()
    {
        $query = "SELECT id, name, gender, email, address, height FROM talent ORDER BY name";
        $con = Connection::catchConnection();
        $result = $con->query($query);
        $list = $result->fetchAll();
        return $list;
    }

    public function insert()
    {
        $query = "INSERT INTO talent (name, gender, email, address, height) VALUES ('" . $this->name . "', '" . $this->gender . "', '" . $this->email . "', '" . $this->address . "', '" . $this->height . "')";
        $con = Connection::catchConnection();
        $con->exec($query);
    }

}