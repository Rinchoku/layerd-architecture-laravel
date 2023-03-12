# layered-architecture-laravel

Laravelでレイヤードアーキテクチャを構築してみるためのレポジトリ

ディレクトリ構成(一旦整理)

```
- app
 - Http
  - Controllers
 - Models
 - Providers
 - Repositories
 - Services
```

Controllers: UseCase的立ち位置。Serviceを利用して、Viewに値の受け渡しを行う。
Models: モデル実態
Providers: Serviceで利用するデータベース周りのバインドを行う
Repositories: データベースの実態
Services: ビジネスロジック

個人的にPresenterも追加したい

## setup

`src/.env`を作成し、DB周りの設定を`.env`のDBに合わせる
```
cp src/.env.example src/.env
vim src/.env
```

その後下記コマンドを実行し初期設定を行う

```
make setup
```
