<?php 
class Ajax 
{
    public $server = "localhost";
    public $user = "root";
    public $password = "";
    public $database = "ajax_request";
    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->password, $this->database);

        if ($this->connection->connect_error)
        {
            die("Connection Failed: " . $this->connection->connect_error);
        }
    }

    public function insertData($fname, $lname, $email, $address)
    {
        $sql = "INSERT INTO student(firstname, lastname, email, address) VALUES('".$fname."','".$lname."','".$email."','".$address."')";
        if ($this->connection->query($sql) == TRUE)
        {
            return "Record Successfully inserted to database";
        }
        else
        {
            return "Error in :". $sql . "with" .$this->connection->error;
        }
        $this->connection->close();
    }
 

    // get data from server
    public function getData()
    {
        $sql = "SELECT * FROM student";
        $result = $this->connection->query($sql);
        $send = array();

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $send[] = $row;
            }
        }
        return $send;
    }
}