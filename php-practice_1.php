<?php
// Q1 変数と文字列
$name = '島崎';

echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
<?php
$num1 = 5;
$num2 = 4;
$num3 = 2;

$num = ($num1 * $num2);

echo $num ."\n".($num / $num3);

// Q3 日付操作
<?php

date_default_timezone_set('Asia/Tokyo');

echo '現在時刻は、'. date("Y年m月d日 h時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
<?php

$device = 'windows';
if ($device == 'windows'|| $device == 'mac') {
    echo '使用OSは、' . "$device" . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
<?php

$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成人です。';

echo $message;

// Q6 配列
<?php

$prefecture = ['東京都', '埼玉県', '栃木県', '千葉県', '群馬県', '茨城県', '神奈川県'];

echo $prefecture[2] . 'と' . $prefecture[3] .'は関東地方の都道府県です。';

// Q7 連想配列-1
<?php

$array = array('東京都'=>'新宿区', '神奈川県'=>'横浜市', '千葉県'=>'千葉市', '埼玉県'=>'さいたま市', '栃木県'=>'宇都市', '群馬県'=>'前橋市', '茨城県'=>'水戸市');

foreach ($array as $key => $value) {
    echo $value ."\n";
}

// Q8 連想配列-2
<?php

$array = array('東京都'=>'新宿区', '神奈川県'=>'横浜市', '千葉県'=>'千葉市', '埼玉県'=>'さいたま市', '栃木県'=>'宇都市', '群馬県'=>'前橋市', '茨城県'=>'水戸市');

foreach ($array as $key => $value) {
    if ($key == '埼玉県') {
        echo "$key" . 'の県庁所在地は、' . "$value" . 'です。' ."\n";
        }
    }

// Q9 連想配列-3
<?php

$array = array('東京都'=>'新宿区', '神奈川県'=>'横浜市', '千葉県'=>'千葉市', '埼玉県'=>'さいたま市', '栃木県'=>'宇都市', '群馬県'=>'前橋市', '茨城県'=>'水戸市', '愛知県'=>'名古屋市', '大阪府'=>'大阪市');

foreach ($array as $key => $value) {
    if ($key == '東京都' || $key == '神奈川県' || $key == '千葉県' || $key == '埼玉県'|| $key == '栃木県'|| $key == '群馬県'|| $key == '茨城県') {
        echo "$key" . 'の県庁所在地は、' . "$value" . 'です。' ."\n";
    }
    else {
        echo "$key" . 'は関東地方ではありません。' ."\n";
    }
  }

// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>