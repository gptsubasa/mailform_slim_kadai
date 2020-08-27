# Slim mailform

## 構成

```
.
├─html
│  └─index.php
└─slim3
    ├─config
    ├─Controllers
    │  └─FormController.php             : formのコントローラー
    ├─logs
    ├─resources
    │  ├─cache
    │  └─views                          : テンプレートファイル
    │      ├─form
    │      │  ├─complete.blade.php
    │      │  ├─confirm.blade.php
    │      │  └─input.blade.php
    │      └─layouts
    │          ├─app.blade.php
    │          ├─footer.blade.php
    │          ├─head.blade.php
    │          └─header.blade.php
    ├─src
    │  ├─dependencies.php               : 依存関係を設定(logger,templateエンジン)
    │  ├─middleware.php                 : レスポンスとMVC処理の間に挟まる処理(CSRF)
    │  ├─routes.php                     : ルーティングの設定
    │  └─settings.php                   : 設定関連
    └─vendor

```

## require

```
"slim/slim": "^3.1"
"rubellum/slim-blade-view": "^0.1.1",
"awurth/slim-validation": "^3.3",
"slim/flash": "^0.4.0",
"slim/csrf": "0.8.3",
```

## POINT

* テンプレートエンジン ⇒ blade追加
* validation => awurth/slim-validation
* エラー戻り => flash message
* csrf => slim/csrf

## 作業履歴

```
# 仮想環境にbashログイン
$ docker-compose exec app bash

# slim インストール
$ composer create-project "slim/slim-skeleton=3.1.8" slim3

# テンプレートエンジンをbladeに変更
$ cd slim3
$ composer require rubellum/slim-blade-view

# validation 追加
$ composer require awurth/slim-validation

# flash message追加
$ composer require slim/flash

# csrf
$ composer require slim/csrf:0.8.3
```

## 参考サイト

* [Slim 3 Documentation](http://www.slimframework.com/docs/v3/)
* [Slim 3 Install](https://akiyamada2020.hatenablog.com/entry/20191222/1577018860)
* [PHP軽量FrameworkのSlim3](https://qiita.com/Syo_pr/items/b55e18a8361b3ff882b5)
* [flash message](http://www.slimframework.com/docs/v3/features/flash.html)


