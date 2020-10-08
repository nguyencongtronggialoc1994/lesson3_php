<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    a=<input type="text" name="a"><br><br>
    b=<input type="text" name="b"><br><br>
    c=<input type="text" name="c"><br><br>
    <button type="submit">tinh</button>
</form>
<?php
include 'QuadraticEquation.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $_a= $_POST["a"];
    $_b= $_POST["b"];
    $_c= $_POST["c"];
    $quadraticEquation = new QuadraticEquation($_a,$_b,$_c);
    if ($quadraticEquation->getDiscriminant()<0){
        echo "phuong trinh vo nghiem";
    }
    if ($quadraticEquation->getDiscriminant()==0){
        echo "phuong trinh co nghiem kep x1=x2=".-$_b/2*$_a;
    }
    if ($quadraticEquation->getDiscriminant()>0){
        echo "phuong trinh co nghiem x1=".$quadraticEquation->getRoot1()."  x2=".$quadraticEquation->getRoot2();
    }
}
?>
</body>
</html>