<?php
$isoCodes = ['ab','aa','af','ak','sq','am','ar','an','hy','as','av','ae','ay','az','bm','ba','eu','be','bn','bh','bi','bs','br','bg','my','ca','km','ch','ce','ny','zh','cu','cv','kw','co','cr','hr','cs','da','dv','nl','dz','en','eo','et','ee','fo','fj','fi','fr','ff','gd','gl','lg','ka','de','ki','el','kl','gn','gu','ht','ha','he','hz','hi','ho','hu','is','io','ig','id','ia','ie','iu','ik','ga','it','ja','jv','kn','kr','ks','kk','rw','kv','kg','ko','kj','ku','ky','lo','la','lv','lb','li','ln','lt','lu','mk','mg','ms','ml','mt','gv','mi','mr','mh','ro','mn','na','nv','nd','ng','ne','se','no','nb','nn','ii','oc','oj','or','om','os','pi','pa','ps','fa','pl','pt','qu','rm','rn','ru','sm','sg','sa','sc','sr','sn','sd','si','sk','sl','so','st','nr','es','su','sw','ss','sv','tl','ty','tg','ta','tt','te','th','bo','ti','to','ts','tn','tr','tk','tw','ug','uk','ur','uz','ve','vi','vo','wa','cy','fy','wo','xh','yi','yo','za','zu'];
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
<form action="insert.php" method="post">
    First name: <input type="text" name = "firstName" /><br/>
    Last name: <input type="text" name = "lastName" /><br/>
    Username: <input type="text" name = "userName" /><br/>
    LinkedIn: <input type="text" name = "linkedIn" /><br/>
    Preferred language:                     <select id="pref_language" name="customers" class="form-control custom-select">
        <?php
        foreach ($isoCodes as $code) { ?>

            <option value="<?php echo $code; ?>"><?php echo $code; ?></option>


        <?php } ?>
    </select>
    Github: <input type="text" name = "github" /><br/>
    Email: <input type="text" name = "email" /><br/>
    Avatar: <input type="text" name = "avatar" /><br/>
    Video: <input type="text" name = "video" /><br/>
    Quote: <input type="text" name = "quote" /><br/>
    Quote author: <input type="text" name = "quoteAuthor" /><br/>
    <input type="submit" />
</form>
</body>
</html>
