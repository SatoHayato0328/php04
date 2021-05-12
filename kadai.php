/*1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/
<?php
function a($max){
    $result = $max * 2;
    return $result;
}
echo a($max);
echo "\n";
?>
/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください*/
<?php
function add($a, $b){
    $result = $a + $b;
    return $result;
}
echo add($a, $b);
echo "\n";
?>
/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください*/
<?php
function times($arr){
    $result = $arr[0];
    for($i = 0; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
    return $result;
}
echo times(array(1, 3, 5, 7, 9));
echo "\n";
?>
/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください*/
<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
    }
}
return $max_number;
}
echo max_array(array(1, 3, 5 ,7, 9));
echo "\n";
?>
/*5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。*/
<?php
/* strip_tag使用*/
$text = '<p>Test paragraph.<p><!-- Comment --><a href="#fragment">Other text</a>';
echo strip_tags($text);
echo strip_tags($text, '<p><a>');
echo "/n";

/*array_push使用の場合*/
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

/*array_merge*/
$array1 = array("color" => "red", 2 ,4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

/*time, mktime*/
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:' .date('Y-m-d');
echo"\n";
echo 'Now Week:' .date('Y-m-d', $nextWeek);
echo "\n";

date_default_timezone_set('UTC');
echo "May 1, 2021 is on a" .date("l", mktime(0, 0, 0, 5, 1, 2021));
echo "\n";

/*date*/
$today = date("Y-m-d H:i:s");
echo $today;
?>