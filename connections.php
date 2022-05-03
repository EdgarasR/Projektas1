<?php

function connect()
{
    $host = '127.0.0.1';
    $db   = 'project';
    $user = 'root';
    $pass = 'root';

    $dsn = "mysql:host=$host;dbname=$db;";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        // echo "Connection failed: " . $e->getMessage() . '<br>';
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function getTransportAds()
{
    $connect = connect();
    $result = $connect->query('SELECT * FROM transport_ads WHERE deleted IS NULL')->fetchAll();
    $connect = '';

    return $result;
}
function getElectronicsAds()
{
    $connect = connect();
    $result = $connect->query('SELECT * FROM electronics_ads WHERE deleted IS NULL')->fetchAll();
    $connect = '';

    return $result;
}
function getApplianceAds()
{
    $connect = connect();
    $result = $connect->query('SELECT * FROM appliance_ads WHERE deleted IS NULL')->fetchAll();
    $connect = '';

    return $result;
}


function getTransportAd($id)
{
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM transport_ads WHERE `id` = ?");
    $statement->execute([$id]);
    $result = $statement->fetch();
  
    $connect = '';

    return $result;
}
function getElectronicsAd($id)
{
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM electronics_ads WHERE `id` = ?");
    $statement->execute([$id]);
    $result = $statement->fetch();
  
    $connect = '';

    return $result;
}
function getApplianceAd($id)
{
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM appliance_ads WHERE `id` = ?");
    $statement->execute([$id]);
    $result = $statement->fetch();
  
    $connect = '';

    return $result;
}
function insertTransportRow($data){
    $connect = connect();

    $columns = $values = '';
    $count = count($data);
    $i = 1;

    foreach($data as $name => $value){
        $columns .= "`$name`";
        $values .= ":$name";

        if($i < $count){
            $columns .= ', ';
            $values .= ',';
        }

        $i++;
    }
    $statement = $connect->prepare("INSERT INTO transport_ads ($columns) VALUES ($values)");
    $statement->execute($data);
    $result = $connect->lastInsertId();

    $connect = '';

    return $result;
}
function insertElectronicsRow($data){
    $connect = connect();

    $columns = $values = '';
    $count = count($data);
    $i = 1;

    foreach($data as $name => $value){
        $columns .= "`$name`";
        $values .= ":$name";

        if($i < $count){
            $columns .= ', ';
            $values .= ',';
        }

        $i++;
    }
    $statement = $connect->prepare("INSERT INTO electronics_ads ($columns) VALUES ($values)");
    $statement->execute($data);
    $result = $connect->lastInsertId();

    $connect = '';

    return $result;
}
function insertApplianceRow($data){
    $connect = connect();

    $columns = $values = '';
    $count = count($data);
    $i = 1;

    foreach($data as $name => $value){
        $columns .= "`$name`";
        $values .= ":$name";

        if($i < $count){
            $columns .= ', ';
            $values .= ',';
        }

        $i++;
    }
    $statement = $connect->prepare("INSERT INTO appliance_ads ($columns) VALUES ($values)");
    $statement->execute($data);
    $result = $connect->lastInsertId();

    $connect = '';

    return $result;
}
function softDeleteTransport($id){
    $connect = connect();
    $statement = $connect->prepare(
        "UPDATE transport_ads SET 
            `deleted` = NOW()
        WHERE `id` = ?"
    );
    $statement->execute([$id]);
    $connect = '';
}
function softDeleteElectronic($id){
    $connect = connect();
    $statement = $connect->prepare(
        "UPDATE electronics_ads SET 
            `deleted` = NOW()
        WHERE `id` = ?"
    );
    $statement->execute([$id]);
    $connect = '';
}
function softDeleteAppliance($id){
    $connect = connect();
    $statement = $connect->prepare(
        "UPDATE appliance_ads SET 
            `deleted` = NOW()
        WHERE `id` = ?"
    );
    $statement->execute([$id]);
    $connect = '';
}
function updateTransport($data, $id)
{
    $connect = connect();
    $statement = $connect->prepare(
        "UPDATE transport_ads SET 
            `make` = :make,
            `model` = :model,
            `price` = :price,
            `make_year`= :make_year,
            `power`= :power,
            `mileage` = :mileage,
            `fuel` = :fuel,
            `body` = :body,
            `gearbox` = :gearbox,
            `check` = :check,
            `img` = :img,
            `short_description` = :short_description,
            `long_description` = :long_description
            WHERE `id` = :id"
    );

    $statement->execute($data + ['id' => $id]);
    $connect = '';
}
function updateAppliance($data, $id)
{
    $connect = connect();
    $statement = $connect->prepare(
        "UPDATE appliance_ads SET 
            `title` = :title,
            `name` = :name,
            `model` = :model,
            `img` = :img,
            `price` = :price,
            `short_description` = :short_description,
            `long_description` = :long_description
            WHERE `id` = :id"
    );

    $statement->execute($data + ['id' => $id]);
    $connect = '';
}
function updateElectronic($data, $id)
{
    $connect = connect();
    $statement = $connect->prepare(
        "UPDATE electronics_ads SET 
            `title` = :title,
            `model` = :model,
            `img` = :img,
            `short_description` = :short_description,
            `long_description` = :long_description,
            `price` = :price,
            `cpu` = :cpu,
            `gpu` = :gpu,
            `screen` = :screen,
            `resolution` = :resolution
            WHERE `id` = :id"
    );

    $statement->execute($data + ['id' => $id]);
    $connect = '';
}

