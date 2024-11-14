<?php
// Q1 tic-tac問題
<?php

echo '1から100までのカウントを開始します' ."\n" ."\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
      echo 'tic-tac' ."\n";
    } elseif ($i % 5 == 0) {
      echo 'tac' ."\n";
    } elseif ($i % 4 == 0) {
      echo 'tic' ."\n";
    } else {
      echo "$i" ."\n";
    }
}

// Q2 多次元連想配列
<?php

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' ."\n";

foreach ($personalInfos as $key => $value) {
    echo $key + 1 . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 'で、電話番号は' . $value['tel'] . 'です。' ."\n";
}

$ageList = [25, 30, 18];

foreach ($ageList as $key => $age) {
$personalInfos[$key]['age'] = $age;
}

var_dump($personalInfos);

// Q3 オブジェクト-1
<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student('120', '山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($php)
    {
        echo $this->studentName . 'は' . $php . 'の授業に出席しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
<?php

$date = new DateTime();

$date->modify("-1 month");
echo $date->format('Y-m-d') ."\n";

$date1 = new DateTime('2024-11-14');
$date2 = new DateTime('1992-4-25');

$diff = $date1->diff($date2);

echo $diff->format('あの日から%a日経過しました。');

?>


