# ECサイト 「SECOND used clothing store」
<br>
<br>
<img width="1440" alt="ec_site_home" src="https://user-images.githubusercontent.com/106326448/219935605-e179d333-37b3-4a76-88b4-7a9a9dbe191e.png">　　

## 1.はじめに・概要
<br>

### マルチログイン可能なECサイトです。

プログラミング学習の成果物として今回のポートフォリオを制作いたしました。

管理者、オーナー、ユーザーからのログインが可能です。　　

<br>

[作成したECサイトはこちらから](https://riona1017.xsrv.jp/)

<br>
<br>
<br>
<br>

学生時代に古着屋でアルバイトをしていました。

<br>

その当時コロナの流行もあり、お客様から

**ネット販売して欲しい**

といったお声を多くいただいたり

**ネット販売したいけどややこしそうで手を出せない**

といったスタッフの声を聞いて

購入者と販売者のどちらも経験した私だからこそ作れる

利用者全員が使いやすいサイトを作成しようと思ったことがきっかけです。

<br>
<br>
<br>

## 2.テスト用アカウント
<br>

### ユーザー用テストアカウント　　

![user_login](https://user-images.githubusercontent.com/106326448/219936970-82663f48-ea5c-43c3-9999-86424bbc6679.gif)

email:test@test.com

password:password123

(テスト用アカウントを使わず、新規登録を行なってもらっても大丈夫です。)　　

<br>
<br>
<br>

### オーナー用テストアカウント　　

![owner_login](https://user-images.githubusercontent.com/106326448/219937104-8ae02ceb-59e3-491d-8327-ae30ca9f804e.gif)

・owner1

email:owner1@test.com

password:password123

・owner2

email:owner2@test.com

password:password123

(管理者アカウントから新規登録を行なってもらっても大丈夫です。)　　

<br>
<br>
<br>

### 管理者用テストアカウント　　

![admin_login](https://user-images.githubusercontent.com/106326448/219937257-aabdd1f9-ddfe-4681-a0c9-73e75aa87b4d.gif)

email:admin@test.com

password:password123　　

<br>
<br>
<br>

## 3.特徴　　
<br>

### (1)マルチログイン　　


管理者、オーナー、ユーザーからログインできます。

様々な立場から

ショップの情報やオーナー情報、商品情報を逐一更新、削除、新規登録できるよう機能をそれぞれ実装しています。　　

<br>
<br>
<br>

### (2)表示順、ページネーション　　

![pagination](https://user-images.githubusercontent.com/106326448/219937378-bd171ea9-2b9d-4d02-be5b-cdd3fc867f17.gif)

ユーザー画面からおすすめ順、料金の高い順・低い順、新しい順、古い順の5つに並び替えできます。

20件、50件、100件の3つの表示件数からお選びいただけます。

また次のページに移動しても並び替え内容は保存されたまま表示されるように設定されています。　　

<br>
<br>
<br>

### (3)カート機能、決済(ユーザーログイン必須)　　

![cart](https://user-images.githubusercontent.com/106326448/219937640-e385eb40-f6df-46b3-8624-a67cc0508f31.gif)　　

<br>

#### ・カート機能

個々の商品の合計金額、すべての商品の合計金額の表示

消去ボタンの設置

何もカートに入っていない時の表示画面　　

<br>
<br>

#### ・決済

決済のテストとしてstripeを利用しています。

メールアドレスはご自由にご記入ください (例:test@test.com)

カード情報は

・カード番号:4242 4242 4242 4242

・MM(月)/YY(年):01/25 (※未来の日付であればいつでも大丈夫です)

・CVC:111 (お好きな番号で構いません)

カード所有者はご自由にご記入ください (例:Tanaka Taro)

国または地域:日本

支払うをクリック　　

<br>
<br>
<br>

## 4.機能一覧　　
<br>

### 管理者の機能

|   機能　   |       概要       |  
|----------|------------------|
|認証機能  |ログイン、ログアウトができる|
|バリデーション機能|オーナー情報、認証機能が正しく記入されているか確認できる|
|登録機能 |オーナーを新規登録できる|
|編集機能　　|オーナー情報の更新、削除ができる|
|ソフトデリート機能　　|オーナー情報をソフトデリートできる|
|復元機能|ソフトデリートした情報を復元できる|


### オーナーの機能

|   機能　   |       概要       |  
|----------|------------------|
|認証機能  |ログイン、ログアウトができる|
|バリデーション機能|　店舗や商品情報、認証機能が正しく記入されているか確認できる|
|登録機能|店舗、画像、商品を新規登録できる|
|編集機能|店舗、画像、商品の更新、削除ができる|


### ユーザーの機能

|   機能　   |       概要       |  
|----------|------------------|
|認証機能|新規登録、ログイン、ログアウトができる|
|バリデーション機能|認証機能が正しく記入されているか確認できる|
|検索機能|キーワード、カテゴリーから商品の検索ができる|
|並び替え機能|おすすめ順、料金の高い順、低い順、新しい順、古い順<br>から並び替えることができる|
|ページネーション機能|表示件数を20,50,100件から選択できる|
|商品詳細機能|商品の詳細、販売店舗の情報が見れる|
|追加機能|カートに商品追加ができる|
|数量変更機能|カートに入れる商品の数量を変更できる|
|削除機能|カートの商品を削除できる|
|商品購入機能|stripeを用いてテスト決済ができる|

<br>
<br>
<br>

## 5.DB設計
<br>

<img width="689" alt="db" src="https://user-images.githubusercontent.com/106326448/219938729-e6ac4021-cb70-4acc-ac20-08c51ff99a17.png">
