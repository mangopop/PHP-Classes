<?php

use classes\Database\PDOdb;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require '../vendor/autoload.php';

// create a log channel
$log = new Logger('my channel');
$log->pushHandler(new StreamHandler($_SERVER['DOCUMENT_ROOT'].'/libTest/logs.log', Logger::DEBUG));

$db = new PDOdb($log);


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
$conn = new PDO('mysql:host=localhost;dbname=faker', 'root', '123');
$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$db->query("SELECT * from faker");
$db->execute();
$results = $db->resultset();
$num = count($results);

$start = microtime();
$test = array();

function nums($num,$results) {
    //echo "The generator has started";
    for ($i = 0; $i < 500; ++$i) {
        yield $results[$i];
        yield $test[] = $results[$i]['name'];
        //echo "<br> Yielded -> ". $results[$i]['name'];
//        $test[] = $results[$i]['name'];
    }
    //echo "The generator has ended";
}
foreach (nums($num,$results) as $v);

//for ($i=0; $i < 5000; $i++) {
////    echo "<br> Yielded -> ". $results[$i]['name'];
//    $test[] = $results[$i]['name'];
//}

$fin = microtime();
$log->addInfo("process finished in ".number_format(($fin - $start),5));

echo "<br>".count($test);

//for ($i=0; $i < 10000; $i++) {
//
//    $stmt = $conn->prepare('INSERT INTO faker VALUES(:id, :name)');
//    $stmt->execute(array(
//        'id' => "",
//        'name' => $faker->name
//    ));
//
////    $db->query("INSERT INTO faker name VALUES (:name) ");
//////    $db->preQuery("INSERT INTO faker name VALUES ('{$faker->name}') ");
////    $db->bind(':name', $faker->name);
////    $db->execute();
////    echo $faker->name, "<br>";
////    echo $faker->address, "<br>";
//    //echo $faker->bankAccountNumber, "<br>";
//}