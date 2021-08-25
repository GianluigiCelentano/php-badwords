<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>
        <?php
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Corrupti fugiat deserunt deleniti, nihil rem commodi dolore delectus non. 
        Odio minima tempora dolorum quod dignissimos voluptas optio iste temporibus porro repellat."
        ?>
    </h1>
    <h1>
        <?php
        $str = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Corrupti fugiat deserunt deleniti, nihil rem commodi dolore delectus non. 
        Odio minima tempora dolorum quod dignissimos voluptas optio iste temporibus porro repellat.';
        $str = str_replace("deleniti", "***", $str);
        echo $str;
        ?>
    </h1>
</body>
</html>