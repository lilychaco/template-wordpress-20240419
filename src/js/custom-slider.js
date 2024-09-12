document.addEventListener("DOMContentLoaded", function () {
  let fvSlider = new Swiper(".js-fv-swiper", {
    slidesPerView: 1, // スライドを1枚表示
    spaceBetween: 0, // スライド間のスペース
    effect: "fade", // フェードエフェクト
    autoplay: {
      delay: 4000, // 4秒ごとに自動で次のスライドへ
      disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
    },
    speed: 2000, // スライドの切り替わり速度
  });
});
