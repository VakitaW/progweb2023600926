

<html>
    <head><title>Expresiones</title></head>
    <body>
      <p><img src="A.png" alt="imagen" witdh="250" heigth="60" style="vertical-aling: middle;">
      <?php
         
        $x = 2;
        $y = 4;
        $sd = 1/$x;
        $sf = ($x+$y)/3;
        $sa = 2*($x/$y);
        $res1 = $sd+$sf+$sa;

        printf("%f",$res1);
      ?>
      <p><img src="B.png" alt="imagen" witdh="250" heigth="60" style="vertical-aling: middle;">
      <?php
       $a = 3;
      $a1 = (0.5*$a)+((3+$a)/2)*(2*pow($a,2));
       $a2 = (2+3)*$a;
       $op = $a1/$a2;

       printf("%f", $op);

      ?>
      <p><img src="C.png" alt="imagen" witdh="250" heigth="60" style="vertical-aling: middle;">
      <?php
       $w = 2;
       $w1 = pow((2*$w),2)+pow(3,2);
       $c = sqrt($w1)/5;
       $w2 = sqrt(pow($w,2));
       $op1 = $c+$w2;

       printf("%d", $op1);
      
      ?>
      <p><img src="D.png" alt="imagen" witdh="250" heigth="60" style="vertical-aling: middle;">
      <?php
       $r = 2;
       $rr1 = ((0.5)+(0.25)+(0.125))*(pow($r,1/3));
       $rr2 = (sqrt($r)/2)+((3*pow($r,2))/4);
       $resultado = $rr1/$rr2;

       printf("%f",$resultado);
      ?>
      <p><img src="E.png" alt="imagen" witdh="250" heigth="60" style="vertical-aling: middle;">
      <?php
       $g=4;
       $gg1=(pow($g,2)/2)+(1/(sqrt($g)));
       $gg2=3+(0.5*pow($g,3));
       $final=(sqrt($gg1/$gg2));
       
       printf("%f", $final);
      ?>
    </body>
</html>    