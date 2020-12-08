<?php

require 'connectDb.php';
require 'form.php';
require 'html.php';
require 'validator.php';

if(isset($_POST['userName'],$_POST['userComment'])){
    echo 'isset';
    $db = Connection::connect("localhost","testoop", "root", "Password_1");
    $oneUser = new Form($_POST);
    print_r($oneUser);
    $oneUser->addUser();
    //$_POST = array();
    //header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Exercise 2 -->
<?php
    $tag = new Html();
    echo $tag->createMetaTag("viewport", "width=device-width, initial-scale=1.0");
    echo $tag->createMetaCharset("UTF-8");
    echo $tag->createCssLink("style.css");
    echo $tag->createJsScript("script.js");
    echo $tag->createTitle("PHP Form using OOP");
    echo $tag->createFavicon("https://github.githubassets.com/images/modules/logos_page/Octocat.png");
?>
</head>
<body>

<!-- Exercise 2 -->
<?php
    $tag = new Html();
    //echo $tag->createImg("https://github.githubassets.com/images/modules/logos_page/Octocat.png", "octocat");
    echo $tag->createLink("github.com/deschuyteneerj", "github");
?>

<!-- Exercise 1  -->
<?php
$form = new Form($_POST);
echo $form->beginFormMethod("POST");
echo $form->createInput("text", "userName");
echo $form->createEntitled("Which gender are you?");
echo $form->createSelect("gender", ["M", "F"]);
echo $form->createTextarea(5, "userComment");
echo $form->createEntitled("Have you got a salary?");
echo $form->createInputCheckboxRadio("radio", "salary", ["Yes", "No"]);
echo $form->createEntitled("What kind of music do you listen?");
echo $form->createInputCheckboxRadio("checkbox", "musicGenre", ["Rap", "Rock", "Classique", "Variété"]);
echo $form->createSubmit();
echo $form->EndingForm();
?>

<!-- Exercise 3  -->
<?php
$check = new Validator();
echo $check->checkInteger("135i1");
echo $check->checkFloatNumber("3,1a");
echo $check->checkBoolean("2");
echo $check->checkMail("a@.com");

echo $check->checkString("aaaaaaaaaaaaaa");
echo $check->checkInteger("1351");
echo $check->checkFloatNumber("3.1");
echo $check->checkBoolean("1");
echo $check->checkBoolean("true");
echo $check->checkBoolean("on");
echo $check->checkBoolean("yes");
echo $check->checkBoolean("0");
echo $check->checkBoolean("false");
echo $check->checkBoolean("off");
echo $check->checkBoolean("no");
echo $check->checkMail("altesse@babar.com");
?>
</body>
</html>