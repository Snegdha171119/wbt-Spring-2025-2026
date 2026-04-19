<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first webpage </h1>
    <h2>  Class Task  </h2>
    <?php
    echo "Task 1 <br><br>" ;
    $length = 20;
    $width = 10;

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "length: " .$length . "<br>";
    echo "width: " .$width . "<br>";
    echo "Area of the Rectangle: " .$area . "<br>";
    echo "Perimeter of the Rectangle: " .$perimeter . "<br><br>";
     
      echo " Task 2 <br><br>"  ;
      $amount=5000;
      $vat=0.15;
      $total= $amount + $vat;

      echo "Amount: " .$amount . "<br>";
       echo "Vat: " .$vat . "<br>";
        echo "Total : " .$total . "<br><br>";


       echo " Task 3 <br><br>"  ;
       $num=10 ;
       if($num % 2==0)
        {
            echo $num . " Is Even<br><br>";

        }
        else
             {
                  echo $num . " Is Odd<br><br>";

        }

            echo " Task 4 <br><br>" ;
        
        $x= 15;
        $y= 6;
        $z = 80;

        if ($x>=$y && $x>=$z)
            {
                echo " $x  Is Greater<br><br>" ;
            }
            else if ($y>=$x && $y>=$z)
           
            {
                echo " $y  Is Greater<br><br>" ;
            }

             else 
           
            {
                echo " $z  Is Greater<br><br>" ;
            }

            echo "Task 5 <br><br>";

            for($i = 10; $i <= 100; $i++) {
             if($i % 2 != 0) {
              echo $i . " ";
                 }
            }
            echo "<br><br>" ;


            echo "Task 6 <br><br>";

             $num = array(20, 55, 95, 75, 90);
             $search = 90;
             $found = false;
             for ($i = 0; $i<5; $i++)
            {
             if ($num[$i] == $search)
             {
              $found = true;
               break;
               }
                 }
             if ($found == true)
             {
                echo $search . " is found. <br><br>";
              } else
             {
              echo $search . " is not found. <br><br>";
              }

             echo "Task 7 <br><br>";
              for ($i = 1; $i <= 3; $i++)
               {
                for ($j = 1; $j <= $i; $j++)
                {
                 echo "* ";
          }
          echo "<br>";
            } echo "<br>";
           for ($i = 3; $i >= 1; $i--)
          {
           for ($j = 1; $j <= $i; $j++)
           {
            echo $j . " ";
           }
          echo "<br>";
           } echo "<br>";
          $chr = 'A';
          for ($i = 1; $i <= 3; $i++)
          {
            for ($j = 1; $j <= $i; $j++)
             {
               echo $chr . " ";
              $chr++;
}
            echo "<br>";
             }

           ?>
    
</body>
</html>