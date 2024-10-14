
	///wpcf7mailsent が発火しているかどうか確認
document.addEventListener("wpcf7mailsent", function (event) {
  setTimeout(function () {
    alert("お問い合わせありがとうございます！メール送信が完了しました。");
    window.location.replace(
      "/diving-lily/contact/thanks/"
    );
  }, 100);
});




// フォーム送信成功時（サンクスページへリダイレクト）
// document.addEventListener(
//   "wpcf7mailsent",
//   function (event) {
//     console.log("Form successfully sent.");
//     // サンクスページにリダイレクト
//    location.href = "/contact/thanks";// サンクスページのURLに変更
//   },
//   false
// );

// フォーム送信エラー時（エラーページへリダイレクト）
// document.addEventListener(
//   "wpcf7invalid",
//   function (event) {
//     console.log("Form validation failed.");

//     // 現在のページがすでにエラーページかどうかを確認
//     if (window.location.pathname !== "/contact/error/") {
//       // エラーページにいない場合は、エラーページにリダイレクト
//       console.log("Redirecting to error page.");
//       location.href = "/contact/error"; // エラーページのURLを指定
//     } else {
//       // すでにエラーページにいる場合はリダイレクトしない
//       console.log("Already on error page. No further redirection.");
//     }
//   },
//   false
// );
