<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hien thi tam giac</title>
</head>
<body>
<form action="" method="post">
    <label for="side1">
        <input type="text" name="side1" id="side1">side1
    </label>
    <label for="side2">
        <input type="text" name="side2" id="side2">side2
    </label>
    <label for="side3">
        <input type="text" name="side3" id="side3">side3
    </label>
    <button type="submit">ket qua</button><br>
    <?php
    include_once "Shape1.php";
    include_once "Triangle1.php";
    $triangle1= new Triangle1("tam giac",blue);
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $triangle1->setSide1($_POST["side1"]);
        $triangle1->setSide2($_POST["side2"]);
        $triangle1->setSide3($_POST["side3"]);
        echo $triangle1->__toString();
    }
    ?>
</form>


</body>
</html>

