<?php
require 'car.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car class</title>
    <style>
    th, td {border: 1px solid black;}
    </style>
</head>
<body>
<?php
$car1 = new Car("BE 1AAA999", "01/01/2013", 90000, "A3", "Audi", "Grey", 1400);
$car1->setImage("https://www.cars-data.com/webp/thumbs/350px/audi/audi-a3_3704_11.webp");

$car2 = new Car("BE 1BBB999", "01/01/1998", 190000, "Integra R", "Honda", "White", 1136);
$car2->setImage("https://www.cars-data.com/pictures/thumbs/350px/honda/honda-integra-r_3830_1.jpg");

$car3 = new Car("BE 1CCC999", "01/01/2010", 250000, "Mulsanne", "Bentley", "Dark Grey", 3200);
$car3->setImage("https://www.cars-data.com/pictures/thumbs/350px/bentley/bentley-mulsanne_233_5.jpg");

$car4 = new Car("BE 1AAA999", "01/01/2013", 90000, "A3", "Audi", "Grey", 1400);
$car4->setImage("https://www.cars-data.com/webp/thumbs/350px/audi/audi-a3_3704_11.webp");

$car5 = new Car("FR BB999BB", "01/01/1998", 190000, "Integra R", "Honda", "White", 1136);
$car5->setImage("https://www.cars-data.com/pictures/thumbs/350px/honda/honda-integra-r_3830_1.jpg");

$car6 = new Car("FR CC999CC", "01/01/2010", 250000, "Mulsanne", "Bentley", "Dark Grey", 3200);
$car6->setImage("https://www.cars-data.com/pictures/thumbs/350px/bentley/bentley-mulsanne_233_5.jpg");

$car7 = new Car("DE AAAA9999", "01/01/2013", 90000, "A3", "Audi", "Grey", 1400);
$car7->setImage("https://www.cars-data.com/webp/thumbs/350px/audi/audi-a3_3704_11.webp");

$car8 = new Car("DE BBBB9999", "01/01/1998", 190000, "Integra R", "Honda", "White", 1136);
$car8->setImage("https://www.cars-data.com/pictures/thumbs/350px/honda/honda-integra-r_3830_1.jpg");

$car9 = new Car("DE CCCC9999", "01/01/2010", 250000, "Mulsanne", "Bentley", "Dark Grey", 3200);
$car9->setImage("https://www.cars-data.com/pictures/thumbs/350px/bentley/bentley-mulsanne_233_5.jpg");
?>

<table>
    <tr>
        <th>Image</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Country</th>
        <th>Registration Number</th>
        <th>Date of Circulation</th>
        <th>Mileage</th>
        <th>Decay</th>
        <th>Age</th>
        <th>Reserved</th>
    </tr>
<?php
$car1->display();
$car2->display();
$car3->display();
$car4->display();
$car5->display();
$car6->display();
$car7->display();
$car8->display();
$car9->display();
?>
</table>
</body>
</html>