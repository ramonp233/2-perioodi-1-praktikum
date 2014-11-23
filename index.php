<!DOCTYPE HTML>
<html>
<head>
    <title>2-periood</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <?php $page_link = "second_page.php";
    $name = "Ramon";
    $lastname = "Pääsuke";
    $age = 100; ?>
    <a href="<?php echo $page_link.'?name='.$name."&lastname=".$lastname."&age=".$age; ?>">Teisele lehele</a>
    <?php $example = array("name" => "Ramon", "lastname" => "Pääsuke"); ?><br>
    <?php echo $_GET["test"]; ?>
</body>
</html>