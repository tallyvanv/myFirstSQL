<?php

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
<form action="../insert.php" method="post">
    <input type="text" name = "firstName" /><br/>
    <input type="text" name = "lastName" /><br/>
    <input type="text" name = "userName" /><br/>
    <input type="text" name = "linkedIn" /><br/>
    <select name="preferred_language">
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="nl">nl</option>
        <option value="ru">ru</option>
        <option value="zh">zh</option>
    </select>
    <input type="text" name = "github" /><br/>
    <input type="text" name = "email" /><br/>
    <input type="text" name = "avatar" /><br/>
    <input type="text" name = "video" /><br/>
    <input type="text" name = "quote" /><br/>
    <input type="text" name = "quoteAuthor" /><br/>
    <input type="submit" />
</form>
</body>
</html>
