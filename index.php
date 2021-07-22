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

    //jawaban soal 1
    echo "<h3>Soal 1</h3>";
    echo "Membuat aplikasi untuk menampilkan “Hello” dan “World”<br><br>";
    function filter($int){
        $result="";
        if ($int%3==0 && $int%5==0){
            $result.="Angka : $int = Hello World";
        }else if($int%3==0){
            $result.="Angka : $int = Hello";
        }else if ($int%5==0){
            $result.="Angka : $int = World";
        }
        return $result."<br>";
    }

    echo filter(3); //Hello
    echo filter(5); //World
    echo filter(15); //Hello World


    //jawaban soal 2
    echo "<h3>Soal 2</h3>";
    echo "Melakukan check format email<br><br>";

    function cek_mail($email){
        $pattern = '/^([a-zA-Z0-9\.]{1,20}+@+[a-zA-Z]+(\.)+(id|co.id))$/';
            if(preg_match($pattern, $email)){
                echo "Valid email<br>";
            }else {
                echo "Invalid email<br>";
            }
        }
    cek_mail("aryadewangga@gmail.co.id");
    cek_mail("123456789123456789101@gmail.co.id");

    //jawaban soal 3
    echo "<h3>Soal 3</h3>";
    echo "Konversi Waktu<br><br>";
        
        function convertTime($time){
            $h1 = $time[1]-'0';
            $h2 = $time[0]-'0';
            $hh = ($h2*10+$h1%10);

            if($time[8]=='A'){
                echo "$time : ";
                if ($hh==12){
                    echo "00";
                    for ($s=2;$s<=7;$s++){
                        echo "$time[$s]";
                    }
                } else{
                    for($s=0;$s<=7;$s++){
                        echo "$time[$s]";
                    }
                    
                }echo "<br>";
            }else{
                echo "$time : ";
                if ($hh==12){
                    echo "12";
                    for ($s=2;$s<=7;$s++){
                        echo "$time[$s]";
                    }
                } else{
                    $hh=$hh+12;
                    echo "$hh";
                    for($s=0;$s<=7;$s++){
                        echo "$time[$s]";
                    }
                }
                echo "<br>";
            }
        }

        convertTime("12:00:00PM");
        convertTime("12:00:00AM");

    // jawaban soal 4
    echo "<h3>Soal 4</h3>";
    echo "Reverse Kalimat<br><br>";
    
    function reverse($string) {
        $lenght=strlen($string);
        $temp="";
        for ($i=($lenght-1);$i>=0;$i--){
            $temp.=$string[$i];
        }
        return $temp;
    };

    function reverseString($string2){
        $reverseResult=reverse($string2);
        echo"Sebelum Reverse : $string2<br> Setelah Reverse : ";
        echo $reverseResult;
    }

    reverseString("I LOVE GITS");
    echo"";


    //jawaban soal 5
    echo "<h3>Soal 5</h3>";
    echo "Cek Palindrom<br><br>";


    function palindrome($key){
        $resultPalindrome=reverse($key);
    
        if ($key===$resultPalindrome){
            echo "true<br>";
        }else{
            echo "false<br>";
        }
       }
    
    palindrome("katak") ;
    palindrome("ubi");

?>
</body>
</html>