<?php

class Client {
    public $name;
    public $sub_name;

    function __construct($name, $sub_name) {
        $this->name = $name;
        $this->sub_name = $sub_name;
    }
};

$client_1 = new Client("Darth", "Vader");

$client_2 = new Client("Kurt", "Cobain");

$client_3 = new Client("Chester", "Bennington");

$client_4 = new Client("Axl", "Rose");

$client_5 = new Client("Avril","Lavigne");

$client_6 = new Client("Rick", "Sanches");

$client_7 = new Client("Jack", "Sparrow");

$client_8 = new Client("Harry", "Potter");

$client_9 = new Client("Tony", "Stark");

$client_10 = new Client("Steve", "Rogers");

$clients_list = [
    $client_1,
    $client_2,
    $client_3,
    $client_4,
    $client_5,
    $client_6,
    $client_7,
    $client_8,
    $client_9,
    $client_10
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table clientes</title>
</head>
<body>
	<table>
          <thead>
              <th>NOME</th>
              <th>SOBRENOME</th>
            </thead>
    <?php for( $i = 0; $i <= count($clients_list) - 1; $i++) { ?>
            <tr>
                <td><?=$clients_list[$i]->name?></td>
                <td><?=$clients_list[$i]->sub_name?></td>
            </tr>    
    <?php } ?>
    </table>    
</body>
</html>