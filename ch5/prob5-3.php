<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>郵便番号の確認</title>
</head>
<body>
    <h1>郵便番号の確認</h1>
    <form method="POST" action="prob5-3.php">
        <p><b>郵便番号を入力してください</b></p>
        <input type="text" name="zip" placeholder="例）101-0051">
        <br>
        <?php
            $z = $_POST["zip"];
            if(preg_match("/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/",$z)){
                echo $z . "は郵便番号です。";
            } elseif($z===""){
                echo "値を入力してください";
            } else {
                echo $z . "は郵便番号ではありません。";
            }
        ?>
        <br>
        <input type="submit" value="確認する">

    </form>
</body>
</html>