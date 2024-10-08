<ul>
    <li>分配成績等級</li>
    <li>給定一個成績數字，根據成績所在的區間，給定等級</li>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
    <li>依據學生成績等級給予評價</li>
    <li>根據學生不同的成績等級在網頁上印出不同的文字評價</li>
</ul>
<h1>答</h1>
<?php
$score=-89;
if($score<0){
    $level='?';
} elseif ($score<60) {
    $level='E';
} elseif ($score<70){
    $level='D';
} elseif ($score<80){
    $level='C';
} elseif ($score<90){
    $level='B';
} else { // 這裡應該用 else 來處理大於等於 90 的情況
    $level='A';
}
echo '學生分數為:'.$score.'等級為:'.$level
// $a=[rand(0,100),rand(0,100),rand(0,100)];

// $lable='A';

// foreach ($a as $value) {
//     if ($value >= 90) {
//         $grade = 'A';
//     } elseif ($value >= 80) {
//         $grade = 'B';
//     } elseif ($value >= 70) {
//         $grade = 'C';
//     } elseif ($value >= 60) {
//         $grade = 'D';
//     } else {
//         $grade = 'E';
//     }
//     echo $lable++ .'學生:'.$value.'評分:'.$grade."<br>";
// }
?>
<h2>試試看</h2>
<!-- <?php
$a=[rand(0,100),rand(0,100),rand(0,100)];

$lable='A';
$comment='';

switch ($grade) {
    case 'A':
        $comment='棒';
        break;
    case 'B':
        $comment='不錯';
        break;
    case 'C':
        $comment='普通';
        break;
    case 'D':
        $comment='加油';
        break;    
    case 'E':
        $comment='爛';
        break;
}

foreach ($a as $value) {
    if ($value >= 90) {
        $grade = 'A';
    } elseif ($value >= 80) {
        $grade = 'B';
    } elseif ($value >= 70) {
        $grade = 'C';
    } elseif ($value >= 60) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }
    echo $lable++ .'學生:'.$value.'評分:'.$grade.'評價:'.$comment."<br>";
}
?> -->
<?php
function getGradeAndComment($score){
    $grade='';
    $comment='';
    if ($score >= 90) {
        $grade = 'A';
    } elseif ($score >= 80) {
        $grade = 'B';
    } elseif ($score >= 70) {
        $grade = 'C';
    } elseif ($score >= 60) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }
    switch ($grade) {
        case 'A':
            $comment='棒';
            break;
        case 'B':
            $comment='不錯';
            break;
        case 'C':
            $comment='普通';
            break;
        case 'D':
            $comment='加油';
            break;    
        case 'E':
            $comment='爛';
            break;
    }
    return[$grade,$comment];
}
$lable='A';
$a=[rand(0,100),rand(0,100),rand(0,100)];
foreach($a as $value){
    [$grade,$comment]=getGradeAndComment($value); //'a'建議用getGradeAndComment
    echo $lable++ .'學生'.$value .'評價:'.$grade.'&nbsp;'.$comment.'<br>' ;
} 
?> 