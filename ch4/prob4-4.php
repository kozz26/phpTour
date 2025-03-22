

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>配列からリストを作る</h1>
    <?php
    $countries = ["日本","中国","アメリカ"];
    
    foreach($countries as $v){
        
        echo "<li>" . $v . "</li>";
    }
  
    ?>
</body>
</html>