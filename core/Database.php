<?php 

namespace app\core;

use PDO;

class Database {

    public PDO $pdo;
    public function __construct($config)
    {
        $this->pdo = new PDO(
            $config['dsn'], 
            $config['dbuser'],
            $config['dbpass']
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();

        $files = scandir(Application::$ROOT_DIR.'/migrations');

        $toApplyMigrations = array_diff($files, $appliedMigrations);

        \var_dump($toApplyMigrations);

        foreach($toApplyMigrations as $migration) {
            if($migration === '.' || "..") {
                continue;
            }
        }

        require_once Application::$ROOT_DIR.'/migrations/'.$migration;
        $migrationName = pathinfo($migration, PATHINFO_FILENAME);
        $inctance = new $migrationName();
        $inctance->up();
       
    }

    public function createMigrationsTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
        id SERIAL PRIMARY KEY,
        migration VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");
    }


    public function getAppliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_COLUMN);
    }


}