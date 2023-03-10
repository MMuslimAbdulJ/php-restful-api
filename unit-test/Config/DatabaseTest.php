<?php 

namespace muslim\restfulapi\Config;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testConnection() {
        $connection = Database::getConnection();
        self::assertNotNull($connection);
    }

    public function testSingleton() {
        $connection1 = Database::getConnection();
        $connection2 = Database::getConnection();
        self::assertSame($connection1, $connection2);
    }
}

?>