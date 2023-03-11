# layered-architecture-laravel

Laravelでレイヤードアーキテクチャを構築してみるためのレポジトリ

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
