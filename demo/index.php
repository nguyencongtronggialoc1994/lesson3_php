<?php
include 'Student.php';
$student_list = [];
?>
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
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <button type="submit">add</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']== "POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $student = new Student($name,$age,$address);
    array_push($student_list,$student);
}
?>
<table width="800px">
    <h1>danh sach khach hang</h1>
    <tr>
        <td>STT</td>
        <td>NAME</td>
        <td>AGE</td>
        <td>ADDRESS</td>
    </tr>
    <?php foreach ($student_list as $key=>$value):?>
    <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $student->getName(); ?></td>
        <td><?php echo $student->getAge(); ?></td>
        <td><?php echo $student->getAddress(); ?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
