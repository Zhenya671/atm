<?php
//var_dump($_POST['summa']);

if (isset($_POST['summa'])) {
    $summa =  (int)$_POST['summa'];
    $ost = $summa % 5;
    if ($ost != 0) {
        $ost_me = $_POST['summa'] - $ost;
        $ost_mo = $ost_me + 5;
        echo "Введите другую сумму : <b>" . $ost_me . '</b> или <b>' . $ost_mo . '</b><br />';
    } else {
        echo "Ваша сумма: <b>" . $summa . "</b><br />";
        $f = $summa / 500;
        echo "500 - <b>" . (int)$f ."</b><br />";

        $f_200 = 500*(int)$f;
        $f_yy_200 = $summa - $f_200;
        $ff_200 = $f_yy_200 / 200;
        echo "200 - <b>" . (int)$ff_200 ."</b><br />";

        $f_100 = 200*(int)$ff_200;
        $f_yy_100 = $f_yy_200 - $f_100;
        $ff_100 = $f_yy_100 / 100;
        echo "100 - <b>" . (int)$ff_100 ."</b><br />";

        $f_50 = 100*(int)$ff_100;
        $f_yy_50 = $f_yy_100 - $f_50;
        $ff_50 = $f_yy_50 / 50;
        echo "50 - <b>" . (int)$ff_50 ."</b><br />";

        $f_20 = 50*(int)$ff_50;
        $f_yy_20 = $f_yy_50 - $f_20;
        $ff_20 = $f_yy_20 / 20;
        echo "20 - <b>" . (int)$ff_20 ."</b><br />";

        $f_10 = 20*(int)$ff_20;
        $f_yy_10 = $f_yy_20 - $f_10;
        $ff_10 = $f_yy_10 / 10;
        echo "10 - <b>" . (int)$ff_10 ."</b><br />";

        $f_5 = 10*(int)$ff_10;
        $f_yy_5 = $f_yy_10 - $f_5;
        $ff_5 = $f_yy_5 / 5;
        echo "5 - <b>" . (int)$ff_5 ."</b><br />";
    }
}

//var_dump($_POST['summa']);
