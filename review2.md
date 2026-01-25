# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか

PUTメソッド記述を含んだinputタグ

### findメソッドの引数に指定しているIDは何のIDか

ルートパラメータ

### findメソッドで実行しているSQLは何か

WHEREに引数$IDを指定したSELECT文

### findメソッドで取得できる値は何か

idカラムが$idの値と一致するレコード

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか

データベースに更新対象のIDが存在するかしないか

## Todo論理削除

### traitとclassの違いとは

traitは1つのクラスに複数追加可能できずインスタンス化できない

### traitを使用するメリットとは

traitを用いて複数のクラスで同じメソッドやプロパティを使用できる

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか

Todoクラスのインスタンス化時

### RequestクラスからFormRequestクラスに変更した理由

バリデーションを適用させ、その処理内容をコントローラ以外で扱うため

### $errorsのhasメソッドの引数・返り値は何か

引数…入力欄のname
返り値…trueかfalse

### $errorsのfirstメソッドの引数・返り値は何か

引数…入力欄のname
返り値…バリデーションエラーの最初のエラーメッセージ

### フレームワークとは何か

揮発に必要な機能と構成があらかじめ決まっている枠組み

### MVCはどういったアーキテクチャか

Model、View、Controllerの3つの役割を使ったもの

### ORMとは何か、またLaravelが使用しているORMは何か

ORMはクラスとデータベースをマッピングすること
Laravelで使用しているのはEloquent

### composer.json, composer.lockとは何か

composer.json…「どのライブラリが必要か」を定義する設定ファイル
composer.lock…インストールされたライブラリのバージョンを記録するファイル

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか

venderディレクトリ