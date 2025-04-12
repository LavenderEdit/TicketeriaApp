<?php
namespace Models;

use PDO;
use PDOException;
class BaseModel
{
    protected $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function ejecutarProcedimiento($sp_name, $params = [])
    {
        try {
            $placeholders = implode(',', array_fill(0, count($params), '?'));
            $sql = "CALL $sp_name($placeholders)";
            $stmt = $this->db->prepare($sql);

            foreach ($params as $key => $value) {
                $stmt->bindValue($key + 1, $value);
            }

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    /**
     * @param string $tipo
     * @param array $params
     * @return array
     */
    public function callProcedure($tipo, $params = [])
    {
        $className = strtolower((new \ReflectionClass($this))->getShortName());
        $sp_name = "sp_" . $tipo . "_" . $className;
        return $this->ejecutarProcedimiento($sp_name, $params);
    }
}