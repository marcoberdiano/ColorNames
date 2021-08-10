<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            text-align: center;
        }
        .cor{
            width: 80px;
            height: 80px;
            border-radius: 5%;
            padding: 30px;
            margin: 10px;
            float:left;
            text-align: center;
            border: 1px solid black;
            box-shadow: 1px 1px grey;
        }

        p{
            text-transform: capitalize;
            text-transform: uppercase;
        }

        .txtbold {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
    
    $file = fopen('./php_cores/files/coreshtml.csv','r');

    while($data = fgetcsv($file, 1024, ';')){
        
        $nomes[] = trim($data[0]);
        $cores[] = trim($data[1]);
      
    }

    fclose($file);
    $total_cores = count($cores);
    print '<h1>'.'Total cores: '.$total_cores.'</h1>';

    for($i=0; $i<count($cores);$i++){

        print '<div class="cor" style="background-color: ' .$cores[$i]. ';">'.'<p>'.$nomes[$i].'</p>'.'<p class="txtbold">'.$cores[$i].'</p>'.'</div>';

    }
    
    ?>
    
</body>
</html>