    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
        <?php
            //   $kata="Belajar <b><font color='red'>PHP</font></b>";
            //   $kata='Belajar <b><font color="red">PHP</font></b>';
            //   $kata="Belajar <b style=\"margin:2px\"><font color=\"red\">PHP</font></b>";
            //   echo $kata;

            $angka1= 10; $angka2= 2;
            echo "Operataor Aritmatika :".$angka1." & ".$angka2;
            echo "<br>Penjumlahan :".$angka1 + $angka2;
            echo "<br>Pengurangan :".$angka1 - $angka2;
            echo "<br>Perkalian :".$angka1 * $angka2;
            echo "<br>Pembagian :".$angka1 / $angka2;
            echo "<br>Perpangkatan :".$angka1 ** $angka2;
            echo "<br>modulus :".$angka1 % $angka2;
            
            $kata= "Bismillah";
            $kata.= "Saya bisa PHP";
            echo $kata;
        ?>
    </body>
    </html>