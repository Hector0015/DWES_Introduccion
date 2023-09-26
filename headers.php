<?php 
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if($lang == 'en'){
        print('Good morning, my name is Hector');
    }else{
        print('Buenos días, mi nombre es Hector');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>