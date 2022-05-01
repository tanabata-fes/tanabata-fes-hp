# Contribution Guide

共同開発なのでこういうものがあった方がいいかと。なんとなくで書いたのでこのファイルのPRも待ってます。

## 開発を進めるにあたり

開発は基本的には作業用のブランチを切ってdevelopにプルリクを出してください。初期開発段階ではファイル毎にブランチを切ってもらえるといいのかなと思います。初期の開発が落ち着いた段階から残りは良い感じに進めてください。

### Issueについて

Issueの追加は自由です。皆さん自由に追加してください。

### commit message について
プレフィックスは以下を採用します。

* **feat**: A new feature
* **fix**: A bug fix
* **docs**: Documentation only changes
* **style**: Changes that do not affect the meaning of the code (white-space, formatting, missing
  semi-colons, etc)
* **refactor**: A code change that neither fixes a bug nor adds a feature
* **perf**: A code change that improves performance
* **test**: Adding missing or correcting existing tests
* **chore**: Changes to the build process or auxiliary tools and libraries such as documentation
  generation

引用：
https://github.com/angular/angular.js/blob/master/DEVELOPERS.md#type


## ファイル構成
ここに書くのは適切ではない気がするので後で移動します。

* home.php: トップページ用です
* header.php: ヘッダー用です
* footer.php: フッター用です
* page-about: 七夕祭についてのページです
* page-access: アクセスのページです
* page-committee: 実行委員会のページです
* page-contact: お問い合わせのページです
* page-donation: ご協賛・ご寄付のページです
* page-group: 参加団体のページです
* page-privacy: プライバシーポリシーのページです
* singe: お知らせのベースとなるページです

### 原則いじらなくて問題ないファイル
* functions.php: 追加したいものがある場合はシステム局長 舟山までご連絡ください。
* index.php: 空ファイルを想定しています。
