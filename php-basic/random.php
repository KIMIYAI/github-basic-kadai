<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数$diceにサイコロの出目（1～6までのランダムな整数）を代入する
        $dice =     mt_rand(1, 6);       // サイコロの出目を出力する
        if ($dice === 1) {
            echo "カイトは競馬で１０万失った！";
        } elseif ($dice === 2) {
            echo "カイトは競輪で１０万失った！";
        } elseif ($dice === 3) {
            echo "カイトはパチンコで１０万失った！";
        } elseif ($dice === 4) {
            echo "カイトはスロットで１０万失った！";
        } elseif ($dice === 5) {
            echo "カイトはウーバーで５万稼いだ！";
        } else {
            echo "１０万勝ち";
        }
        ?>
    </p>
</body>

</html>