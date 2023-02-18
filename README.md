# ECサイト 「SECOND used clothing store」


## 1.アプリケーション概要


### マルチログイン可能なECサイトです。

プログラミング学習の成果物として今回のポートフォリオを制作いたしました。

管理者、オーナー、ユーザーからのログインが可能です。

--

学生時代に古着屋でアルバイトをしていました。

お客様から

**「ネット販売もして欲しい」**

とのお声をいただくことが多くあったり、

私自身も

**「もっと多くの人に古着の良さを知ってほしい」**

**「ネットで買える古着って少ないな」**

との思いから

作成したのがこちらのアプリケーションになります。




## 2.テスト用アカウント


### ユーザー用テストアカウント

email:test@test.com

password:password123

(テスト用アカウントを使わず、新規登録を行なってもらっても大丈夫です。)



### オーナー用テストアカウント

・owner1

email:owner1@test.com

password:password123

・owner2

email:owner2@test.com

password:password123

(管理者アカウントから新規登録を行なってもらっても大丈夫です。)



### 管理者用テストアカウント

email:admin@test.com

password:password123



## 3.アプリの特徴

### (1)マルチログイン

管理者、オーナー、ユーザーからログインできます。

様々な立場から

ショップの情報やオーナー情報、商品情報を逐一更新、削除、新規登録できるよう機能をそれぞれ実装しています。


### (2)表示順、ページネーション

おすすめ順、料金の高い順・低い順、新しい順、古い順の5つに並び替えできます。

20、50、100の3つの表示件数からお選びいただけます。

また次のページに移動しても並び替え内容は保存されたまま表示されるように設定されています。


### (3)カート機能、決済(ユーザーログイン必須)


#### ・カート機能

個々の商品の合計金額、すべての商品の合計金額の表示

消去ボタンの設置

何もカートに入っていない時の表示画面



#### ・決済

決済のテストとしてstripeを利用しています。

メールアドレスはご自由にご記入ください (例:test@test.com)

カード情報は

・カード番号:4242 4242 4242 4242

・MM(月)/YY(年):01/25 (※未来の日付であればいつでも大丈夫です)

カード所有者はご自由にご記入ください (例:Tanaka Taro)

国または地域:日本

支払うをクリック

## 4.機能一覧

### 管理者の機能

|   機能　   |       概要       |  
|----------|------------------|
|ログイン機能  |ログイン、ログアウトができる|
|登録機能 |オーナーを新規登録できる|
|編集機能　　|オーナー情報の更新、削除ができる|
|ソフトデリート機能　　|オーナー情報をソフトデリートできる|
|復元機能|ソフトデリートした情報を復元できる|

### オーナーの機能

|   機能　   |       概要       |  
|----------|------------------|
|ログイン機能  |ログイン、ログアウトができる|
|登録機能|店舗、画像、商品を新規登録できる|
|編集機能|店舗、画像、商品の更新、削除ができる|

### ユーザーの機能

|   機能　   |       概要       |  
|----------|------------------|
|認証機能|新規登録、ログイン、ログインができる|
|商品一覧機能|ログインなしでも閲覧可能|
|検索機能|キーワード、カテゴリーから商品の検索ができる|
|並び替え機能|おすすめ順、料金の高い順、低い順、新しい順、古い順<br>から並び替えることができる|
|表示件数機能|表示件数を20,50,100件から選択できる|
|商品詳細機能|商品の詳細、販売店舗の情報が見れる|
