<?php

class Client {
    public $name;
    public $sub_name;
};

$client_1 = new Client();
$client_1->name = "Darth";
$client_1->sub_name = "Vader";

$client_2 = new Client();
$client_2->name = "Kurt";
$client_2->sub_name = "Cobain";

$client_3 = new Client();
$client_3->name = "Chester";
$client_3->sub_name = "Bennington";

$client_4 = new Client();
$client_4->name = "Axl";
$client_4->sub_name = "Rose"; 

$client_5 = new Client();
$client_5->name = "Avril";
$client_5->sub_name = "Lavigne";

$client_6 = new Client();
$client_6->name = "Rick";
$client_6->sub_name = "Sanches";

$client_7 = new Client();
$client_7->name = "Jack";
$client_7->sub_name = "Sparrow";

$client_8 = new Client();
$client_8->name = "Harry";
$client_8->sub_name = "Potter";

$client_9 = new Client();
$client_9->name = "Tony";
$client_9->sub_name = "Stark";

$client_10 = new Client();
$client_10->name = "Steve";
$client_10->sub_name = "Rogers";

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