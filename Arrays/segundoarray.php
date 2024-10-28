<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [];
        $contador = ['M' => 0 , 'F' => 0];
        for ( $i = 0; $i <= 100; $i++) { 
        
            $array[$i] = rand(0,1);
            if ($array[$i]== 0){
                $array[$i] => "M";
            }
            else{
                $array[$i] => "F";
            }

        }
        
        for ($i = 0; $i <= count($array); $i++){
            if($array[$i] == "M"){
                $contador['M']++;
            }
            if($array[$i] == "F"){
                $contador['F']++;
            }
        }
        print_r($array);
        print_r($contador);
    ?>
</body>
</html>