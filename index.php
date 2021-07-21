<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TECHNICAL TEST GITS</h1>
    <?php
    echo "<h3>Soal 1</h3>";

    function filter($int){
        $result="";
        if ($int%3==0 && $int%5==0){
            $result.="Hello World";
        }else if($int%3==0){
            $result.="Hello";
        }else if ($int%5==0){
            $result.="World";
        }
        return $result."<br>";
    }

    echo filter(3); //Hello
    echo filter(5); //World
    echo filter(15); //Hello World
?>
</body>
</html>