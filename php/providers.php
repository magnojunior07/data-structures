<?php

class Provider {
    public $name;
    public $sub_name;

    function __construct($name, $sub_name) {
        $this->name = $name;
        $this->sub_name = $sub_name;
    }
};

$provider_1 = new Provider("Michael", "Jordan");


$providers_list = [
    $provider_1
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
    <?php for( $i = 0; $i <= count($providers_list) - 1; $i++) { ?>
            <tr>
                <td><?=$providers_list[$i]->name?></td>
                <td><?=$providers_list[$i]->sub_name?></td>
            </tr>    
    <?php } ?>

        <a href="./clients.php">
            <button>lista de clientes</button>    
        </a>
    </table>    
</body>
</html>