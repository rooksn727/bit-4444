<!doctype html>
<html>
<head>
  <title>php demo 2</title>
</head>
<body>
  <?php
    $sum = 0;
    for($num=1;$num<=10;$num++) {
     // $sum += $num;
     $sum=$sum+$num;
    }
    echo "The sum of numbers from 1 to 10 is $sum";
  ?>
</body>
</html>
