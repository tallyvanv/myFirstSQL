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
    First name: <input type="text" name = "firstName" /><br/>
    Last name: <input type="text" name = "lastName" /><br/>
    Username: <input type="text" name = "userName" /><br/>
    LinkedIn: <input type="text" name = "linkedIn" /><br/>
    Preferred language: <select name="preferred_language">
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="nl">nl</option>
        <option value="ru">ru</option>
        <option value="zh">zh</option>
    </select>
    Github: <input type="text" name = "github" /><br/>
    Email: <input type="text" name = "email" /><br/>
    Avatar: <input type="text" name = "avatar" /><br/>
    Video <input type="text" name = "video" /><br/>
    Quote: <input type="text" name = "quote" /><br/>
    Author: <input type="text" name = "quoteAuthor" /><br/>
    <input type="submit" />
</form>

<table border="1">
    <?php
    foreach ($studentTable as $user): ?>
        <tr>
            <td>
                <a target="_blank" href="http://myfirstsql.local/profile.php?user=<?php echo $user['id']?>"><?php echo $user['first_name'] ?></a>
            </td>


            <td>
                <?php echo $user['last_name'] ?>
            </td>


            <td>
                <?php echo $user['email'] ?>
            </td>

            <td>
                <img src="<?php echo 'images/' . $user['preferred_language'] . '.png'; ?>" alt="flag">

            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
