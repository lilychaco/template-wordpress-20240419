// Gulpの基本関数をインポート
import gulp from "gulp";
const { src, dest, watch, series, parallel } = gulp;

// SCSSをCSSにコンパイルするためのモジュール
import * as sassModule from "sass";
import gulpSass from "gulp-sass";
const sass = gulpSass(sassModule);

// エラーが発生してもタスクを続行するためのモジュール
import plumber from "gulp-plumber";

// エラーやタスク完了の通知を表示するためのモジュール
import notify from "gulp-notify";

// SCSSのインポートを簡略化するためのモジュール
import sassGlob from "gulp-sass-glob-use-forward";

// メディアクエリをマージするためのモジュール
import mmq from "gulp-merge-media-queries";


// ソースマップを作成するためのモジュール
import sourcemaps from "gulp-sourcemaps";

// ES6+のJavaScriptをES5に変換するためのモジュール
import babel from "gulp-babel";

// SVGを最適化するためのモジュール
import imageminSvgo from "imagemin-svgo";

// ブラウザの自動リロード機能を提供するためのモジュール
import browserSync from "browser-sync";

// 画像を最適化するためのモジュール
import imagemin from "gulp-imagemin";

// JPEGを最適化するためのモジュール
import imageminMozjpeg from "imagemin-mozjpeg";

// PNGを最適化するためのモジュール
import imageminPngquant from "imagemin-pngquant";

// 変更されたファイルのみを対象にするためのモジュール
import changed from "gulp-changed";

// ファイルやディレクトリを削除するためのモジュール
import del from "del";

// webp変換
import webp from "gulp-webp";

//Zip
import zip from "gulp-zip";

const projectName = "temp-wp";
const wpThemeName = "temp-wp-theme";
const baseFolder =
  process.env.Base_Folder ||
  `/Users/yumin/Local Sites/${projectName}/app/public/wp-content/themes/${wpThemeName}`;

// 読み込み先
const srcPath = {
  css: "../src/sass/**/*.scss",
  js: "../src/js/**/*",
  img: "../src/images/**/*",
  html: ["../src/**/*.html", "!./node_modules/**"],
  wp: [
    "../src/wp-theme/**/*",
    "../src/wp-theme/style.css",
    "../src/wp-theme/screenshot.*",
  ],
};

// 出力先
const destPath = {
  all: `${baseFolder}/**/*`,
  css: `${baseFolder}/assets/css/`,
  js: `${baseFolder}/assets/js/`,
  img: `${baseFolder}/assets/images/`,
  wp: `${baseFolder}/`,
  zip: `../files/`,
};

// WP-Themeのコピー
const wpThemeCopy = () => {
  return src(srcPath.wp).pipe(dest(destPath.wp));
};

const cssSass = () => {
  //ソースファイルを指定
  return (
    src(srcPath.css)
      //ソースマップを初期化
      .pipe(sourcemaps.init())
      //エラーハンドリングを設定
      .pipe(
        plumber({
          errorHandler: notify.onError("Error:<%= error.message %>"),
        })
      )

      //Sassのパーシャル（＿ファイル）を自動的にインポート
      .pipe(sassGlob())
      //Sassをcssにコンパイル
      .pipe(
        sass.sync({
          includePaths: ["src/sass"],
          outputStyle: "expanded",
        })
      )
      //メデイアクエリを統合
      .pipe(mmq())
      //ソースマップを書き出し
      .pipe(sourcemaps.write("./"))
      //コンパイル済みのcssファイルを出力先に保存
      .pipe(dest(destPath.css))
      //Sassコンパイルが完了したことを通知
      .pipe(
        notify({
          message: "Sassをコンパイルしました！",
          onLast: true,
        })
      )
  );
};

//画像圧縮
const imgImagemin = () => {
  //画像ファイルを指定
  return (
    src(srcPath.img)
      //変更があった画像のみ処理対象に
      .pipe(changed(destPath.img))
      //画像を圧縮
      .pipe(
        imagemin(
          [
            //Jpeg画像の圧縮設定
            imageminMozjpeg({
              quality: 80,
            }),
            //png画像の圧縮設定
            imageminPngquant(),
            //SVG画像の圧縮設定
            imageminSvgo({
              plugins: [
                {
                  removeViewBox: false,
                },
              ],
            }),
          ],
          {
            verbose: true,
          }
        )
      )
      //圧縮ずみの画像ファイルを出力先に保存
      .pipe(dest(destPath.img))
      .pipe(webp()) //webpに変換
      //圧縮ずみの画像ファイルを出力先に保存
      .pipe(dest(destPath.img))
  );
};

//js圧縮
const jsBabel = () => {
  //   //JavaScriptファイルを設定
  return (
    src(srcPath.js)
      //エラーハンドリングを設定
      .pipe(
        plumber({
          errorHandler: notify.onError("Error:<%= error.message %>"),
        })
      )
      //Babelでトランスパイル（ES6からES5へ変換）
      .pipe(
        babel({
          presets: ["@babel/preset-env"],
        })
      )
      //圧縮済みのファイルを出力先に保存
      .pipe(dest(destPath.js))
  );
};

//ブラウザーシンク
const browserSyncOption = {
  notify: false,
  proxy: `http://temp-wp.local/`,
};

const browserSyncFunc = (done) => {
  browserSync.init(browserSyncOption);
  done(); // 非同期処理の完了をGulpに通知
};

const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

//ファイルの削除
const clean = (target = destPath.all, excludePath = "") => {
  const del_list = excludePath !== "" ? [target, excludePath] : [target];
  return del(del_list, { force: true });
};
const cleanAll = () => clean(destPath.all);
const cleanImg = () => clean(destPath.img);
const cleanPhp = () => clean(`!${baseFolder}/**`, `!${baseFolder}/assets`);

//ファイルのコピー
const copyFiles = () => {
  return src([srcPath.css, srcPath.js, srcPath.img, srcPath.wp], {
    base: "./",
    ignore: [
      "gulp/**/*",
      "gitignore",
      "*.json",
      "*.md",
      ".github/**/*",
      ".vscode/**/*",
    ],
  }).pipe(dest(destPath.all));
};

// アーカイブするファイルがコピーされた後のディレクトリ
const archiveFiles = () => {
  const currentDate = new Date();
  const year = currentDate.getFullYear().toString().slice(-2);
  const month = (currentDate.getMonth() + 1).toString().padStart(2, "0");
  const day = currentDate.getDate().toString().padStart(2, "0");
  const yyMMdd = `${year}${month}${day}`;

  return src(`${destPath.all}/**/*`, { base: destPath.all })
    .pipe(zip(`${yyMMdd}_archive.zip`))
    .pipe(dest(destPath.zip));
};
export const archive = archiveFiles;

//ファイルの監視
const watchFiles = () => {
  watch(srcPath.css, series(cssSass, browserSyncReload));
  watch(srcPath.js, series(jsBabel, browserSyncReload));
  watch(srcPath.img, series(cleanImg, imgImagemin, browserSyncReload));
  watch(srcPath.wp, series(cleanPhp, wpThemeCopy, browserSyncReload));
};

// 開発用タスク
export default series(
  series(cssSass, jsBabel, imgImagemin, wpThemeCopy),
  parallel(watchFiles, browserSyncFunc)
);

// 本番用タスク
export const build = series(
  cleanAll,
  cssSass,
  jsBabel,
  imgImagemin,
  wpThemeCopy
);

// zip 納品用
export const packing = series(cleanAll, copyFiles, archive);
