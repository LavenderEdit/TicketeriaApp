
<?php 
class Database{

    private $conn;
    public function __construct(
        private string $host,
        private string $db_name,
        private string $username,
        private string $password
    ){
    }

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa.";
        } catch(PDOException $exception) {
            echo "Error de conexion: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

$host = "localhost";
$db_name = "";
$username = "root";
$password = "";

$database = new Database($host, $db_name, $username, $password);
$db = $database->getConnection();
//esto lo hizo david
