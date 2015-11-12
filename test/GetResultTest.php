<?php
require '../vendor/autoload.php';
class GetResultTest extends PHPUnit_Extensions_Database_TestCase
{
    public function getConnection()
    {
        $db_ini = parse_ini_file('config_db.ini');
        $connection = new PDO($db_ini['connection'], $db_ini['user'], $db_ini['password']);
        return $this->CreateDefaultDBConnection($connection, 'test_url_db');
    }
    public function getDataSet()
    {
        return $this->createXMLDataSet('dataset.xml');
    }
    public function testAddEntry()
    {
        $this->assertEquals(2, $this->getConnection()->getRowCount('url_table'));
    }
}