# CodeUps-WP-DartSass
- DartSass対応WordPress構築環境を含むgulpファイル
- あーちゃんが作成したものから、改変
- htmlファイルを作成せずに、直接phpファイルを触って、ワードプレスサイトを作るのに特化している

# 注意すること
触るのは、srcフォルダの中。

- phpファイルは、wp-themeの中のphpファイルを成形していく。
- npx gulpを作動させると、作業しているVScodeの中に吐き出されるわけではないことに注意
- yumin/LocalSitesの中に、wp-themeというプロジェクトフォルダを作成
- 下層のthemeフォルダの中に、temp-wp-themeというフォルダを作成
- その中に、wp-themeフォルダの中にあるphpファイルが吐き出される
- srcの中にあるimagesフォルダの中身は、temp-wp-themeというフォルダの中の、assetsフォルダの中のにimagesフォルダの中に、jpeg画像とwebp画像が吐き出される
- srcの中にあるjsフォルダの中身は、temp-wp-themeというフォルダの中の、assetsフォルダの中のjsフォルダに吐き出される
- srcの中にある、sassフォルダの中のstyles.scssファイルが、temp-wp-themeというフォルダの中の、assetsフォルダの中のcssフォルダの中に、styles.cssとして吐き出される

## 環境
- Gulpが使える環境が前提（4系）
- Nodeはバージョン14以降

## 使い方
- ダウンロードしたフォルダを開く
- ターミナルを開き、 npm i とコマンドを入力
- node_modulesとpackage-lock.jsonが生成されるのを確認する
- 「 npx gulp 」とコマンドを入力すると動き出します

## 仕様
- sassの記述はsrcフォルダの中で行う
- jsの記述はsrcフォルダの中で行う
- 画像はsrcフォルダのimagesの中に格納する（圧縮されます）
- コンパイルされたjs/css/images/はwp-themeの中のassetsに吐き出されます

## 備考
- スマホファーストが前提の仕様です。
- rem記述を前提としています。
- ルートフォントをvwで設定していることからPCサイズのレイアウトをタブレットで表示させることが出来ます（remで書いた場合のみ）。

## 静的ファイルをアップするとき
- htmlファイルとassetsフォルダをアップロードしてください

## WordPress
- wp-themeをアップロードすればテーマとして反映されます
# CodeUps-WP-DartSass
