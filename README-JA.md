## SharedCalendar
シンプルで簡単な共有カレンダーを作れるフレームワーク．

GoogleやOutlookのカレンダーは手軽なUIを持っていますが，複数人でのシェアのしやすさに難しさがあります．
大学の研究室や会社などの身内向けのサーバにほぼおくだけで，身内向けの予定表を作れるものがあまりなさそうなので，作ってみました．

## Function
- 予定の表示
- 予定の追加（終日予定のみ）
- 2種類の種別での予定の追加
- 既に追加された予定の削除

基本的に最低限のみです．機能拡張はお好みでご検討ください．index.htmlはcss/jsが統合されているため，ややdutyです．

## Requirements
- Webサーバがあること
- サーバ上でPHPが動くこと
- サーバ上でデータベース（MySQL）が利用できること

要するに，Wordpressが動作するサーバ環境があれば動きます．なので，機能制約のある安価なレンタルサーバ上にもデプロイできます．


## Usage
- 資源をダウンロードしサーバ上に配置
- サーバ上でmySQLを実行
```
mysql -u your_username -p
```
- DBの作成：DBの作成には異なる名前を利用することもできます．
```
CREATE DATABASE db_calendar;
```
- テーブル作成
```
USE db_calendar;
```
```
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    start DATE NOT NULL,
    end DATE,
    color VARCHAR(7),
    allDay BOOLEAN
);
```
- config.phpにDB情報を設定
    - パスワードを平文で書くため，必要に応じてconfig.phpの配置方法は検討してください．
    - config.phpの配置を変更する場合，各phpファイルの冒頭のconfig.phpに向けたpathを書き換える必要があります．
- index.htmlにアクセス


## License
- MITライセンス
- 作成者：Kouyou OTSU
- このソフトは，[FullCalendar](https://fullcalendar.io/)をベースにしています．
