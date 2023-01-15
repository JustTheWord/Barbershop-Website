<?php
class Model
{
    public $config;
    public ?PDO $pdo = null;

    public function __construct()
    {
        $this->config = parse_ini_file('db/config.ini', true);

        $host = $this->config['DB_HOST'];
        $dbname = $this->config['DB_DATABASE'];
        $username = $this->config['DB_USERNAME'];
        $password = $this->config['DB_PASSWORD'];

        try {

            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $this->pdo = new PDO($dsn, "$username", "$password", $options);

        } catch (PDOException $e) {
            // Handle the exception
            echo "Error: " . $e->getMessage();
            die();
        }
    }

    public function getAllClients(): ?array
    {
        if ($this->pdo)
        {
            return $this->pdo->query("SELECT * FROM Clients")->fetchAll();
        }

        return null;
    }

    public function getClientsData($clientsEmail): ?array
    {
        if ($this->pdo)
        {
            $statement = $this->pdo->prepare("SELECT * FROM Clients WHERE email=?");
            $statement->execute(array($clientsEmail));
            $dbResponse = $statement->fetch();

            if (is_array($dbResponse))
                return  $dbResponse;

            else
                return  null;
        }

        echo "The problem with database connection.";
        die();
    }

    public function addNewClient(array $data): bool
    {
        if ($this->pdo)
        {
            $query = 'INSERT INTO Clients (email, name, phone_num, birthday, password) VALUES (?,?,?,?,?)';
            $statement = $this->pdo->prepare($query);

            return $statement->execute($data);
        }

        echo "The problem with database connection.";
        die();
    }
}