@extends('layouts.app')

@section('content')
<?php
 
// 現在の年月を取得
$year = date('Y');
$month = date('n');
 
// 月末日を取得
$last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
 
$calendar = array();
$j = 0;
 
// 月末日までループ
for ($i = 1; $i < $last_day + 1; $i++) {
 
    // 曜日を取得
    $week = date('w', mktime(0, 0, 0, $month, $i, $year));
 
    // 1日の場合
    if ($i == 1) {
 
        // 1日目の曜日までをループ
        for ($s = 1; $s <= $week; $s++) {
 
            // 前半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
 
        }
 
    }
 
    // 配列に日付をセット
    $calendar[$j]['day'] = $i;
    $j++;
 
    // 月末日の場合
    if ($i == $last_day) {
 
        // 月末日から残りをループ
        for ($e = 1; $e <= 6 - $week; $e++) {
 
            // 後半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
 
        }
 
    }
 
}
 
?>


<h2><?php echo $year; ?>年<?php echo $month; ?>月のカレンダー</h2>
<br>
<table>
    <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
    </tr>
 
    <tr>
    <?php $cnt = 0; ?>
    <?php foreach ($calendar as $key => $value): ?>

    
      
 
        <td>
        <?php $cnt++; 
     $day = $value['day'];  
    $date= $year.",".$month.",".$day;
     echo $date ?>
        
        @if (in_array($day,$days))
        <p>✕</p>
        
        @else
    
        {!! Form::model($lend,['route' => 'rentals.store', 'method'=>'post']) !!} 
        
        
        {!!Form::hidden('year', $year)!!}
        {!!Form::hidden('month', $month)!!}
        {!!Form::hidden('day', $day)!!}
        
        {!! Form::submit('〇') !!}
        
        {!! Form::close() !!}
        

         @endif 

  
       
        </td>
 
    <?php if ($cnt == 7): ?>
    </tr>
    <tr>
    <?php $cnt = 0; ?>
    <?php endif; ?>
 
    <?php endforeach; ?>
    </tr>
</table>


<style type="text/css">
 @import url(https://fonts.googleapis.com/earlyaccess/nicomoji.css);
 .sample input[type="submit"]{
border:none;background:#FFF;text-decoration:underline;color:#00f;
}
.sample input:hover
{
cursor:pointer;
}
 
 .sun1,
 .sun2,
 .sun3,
 .sun4,
 .sun5{background:#F9C;color:#fff;}
 body{
     
     font-family: 'Caveat';
     font-weight: bold;
     color: gray;
 }
 table {
    width: 100%;
    font-family: 'Simsun';
}
table th {
    background: #FF97C2;
    color: black;
}
table th,
table td {
    border: 1px solid #CCCCCC;
    text-align: center;
    padding: 5px;
}
p {
    font-size: 20px;
}

 </style>


 </head>
 <body>    
    
    

    <footer>
        
    </footer>
@endsection
