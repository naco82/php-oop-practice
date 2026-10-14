<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>

<body>
    <h1>ユーザー管理プログラム</h1>

    <h2>自己紹介</h2>
    <?php
    class User
    {
        public string $name;
        public int $age;

        //コンストラクタを定義
        public function __construct(string $name, int $age)
        {
            //引数で受け取った値を、プロパティに設定する
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(): string
        {
            return "こんにちは、私は" . $this->name . "です。" . $this->age . "歳です。<br>";
        }

        public function isAdult(): string
        {
            return $this->age >= 18
                ? "{$this->name}さんは成人です。"
                : "{$this->name}さんは未成年です。";

        }
    }

    //newする際に、コンストラクタの引数を渡す
    $user1 = new User("田中太郎", 25);
    $user2 = new User("佐藤花子", 17);
    $user3 = new User("鈴木一郎", 30);

    echo $user1->introduce();
    echo $user2->introduce();
    echo $user3->introduce();

    ?>

    <h2>成人判定</h2>

    <?php

    echo $user1->isAdult();
    echo $user2->isAdult();
    echo $user3->isAdult();

    ?>


</body>

</html>