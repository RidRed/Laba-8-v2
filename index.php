<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание JS</title>
</head>
<body>

    <form action = "#" method = "get">
        <input placeholder = "Напишите X" type = "text" name = "x">
        <input placeholder = "Напишите N" type = "text" name = "n">
        <button >Ввод</button>
    </form>

    <?php

        $x = $_GET["x"];
        $n = $_GET["n"];
        $result = 0 ;
        
        function factorial($n)
        {
        $answer = 1;
            if ($n == 0 || $n == 1)
            {
                return $answer;
            }
            else{
            for($i = $n; $i >= 1; $i--)
                {
                $answer = $answer * $i;
                }
            return $answer;
            }  
        }
        for ($i = 1; $i <= $n; $i++)
        {   
            $result += (pow(-1,$n) * pow($x,$n)) / factorial($n) ;
            
        }
        echo ($result);
            ?>
</body>
</html>