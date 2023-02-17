## ec_site

## 画像のダミーデータ
public/imagesフォルダ内に
sample1.jpeg 〜 sample6.jpeg として保存しています。

php artisan storage:link で
storageフォルダにリンク後、
storage/app/public/productsフォルダ内に
保存すると表示されます。

ショップの画像フォルダも表示する場合は、
storage/app/public/shopsフォルダを作成し、
画像を保存してください。

## 決済について
決済のテストとしてstripeを利用しています。
