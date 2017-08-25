<?php
try
{
    $connection = new MongoClient('mongodb://SvensonTeam:Capracotta.1@ds157833.mlab.com:57833/annunciauto');
    $database   = $connection->selectDB('annunciauto');
    $collection = $database->selectCollection('Utenti');
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

$cursor = $collection->find();

var_dump(iterator_to_array($cursor));
?>