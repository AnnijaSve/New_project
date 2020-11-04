<?php

require 'vendor/autoload.php';

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// TODO Make this look better
function database(): Connection
{
    $connectionParams = [
        'dbname' => $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'host' => $_ENV['DB_HOST'],
        'driver' => 'pdo_mysql',
    ];

    $connection = DriverManager::getConnection($connectionParams);
    $connection->connect();

    return $connection;
}

function query(): QueryBuilder
{
    return database()->createQueryBuilder();
}

$input = file_get_contents('https://www.bank.lv/vk/ecb.xml');

$service = new \Sabre\Xml\Service();
$service->elementMap = [
    '{https://www.bank.lv/vk/ecb.xml}Currency' => 'Sabre\Xml\Element\KeyValue',
];

$result = $service->parse($input);

foreach ($result[1]['value'] as $item) {
    $name = $item['value'][0]['value'];
    $value = $item['value'][1]['value'];

    $currencyQuery = query()
        ->select('*')
        ->from('Currency')
        ->where('name = :name')
        ->setParameter('name', $name)
        ->execute()
        ->fetchAssociative();

    if ($currencyQuery['name']) {
        query()
            ->update('Currency')
            ->set('value', ':value')
            ->setParameters([
                'value' => $value,
            ])
            ->where('name = :name')
            ->setParameter('name', $name)
            ->execute();

    } else {
        query()
            ->insert('Currency')
            ->values([
                'name' => ':name',
                'value' => ':value'
            ])
            ->setParameters([
                'name' => $name,
                'value' => $value,
            ])
            ->execute();
    }
}

$currencyQuery = query()
    ->select('*')
    ->from('Currency')
    ->execute()
    ->fetchAllAssociative();

$currency = [];

foreach ($currencyQuery as $currency) {
    echo $currency['name'] . PHP_EOL;
    echo $currency['value'] . PHP_EOL;
}