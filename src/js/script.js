jQuery(function ($) {
  // ドキュメントが読み込まれた時に実行される
  $(document).ready(function () {
    // ハンバーガーボタンクリックで、ドロワーメニューの開閉
    $("#js-hamburger").click(function () {
      $("body").toggleClass("is-drawerActive");

      let isExpanded = $(this).attr("aria-expanded") === "true";
      $(this).attr("aria-expanded", !isExpanded);
      $("#js-global-menu")
        .css("visibility", isExpanded ? "hidden" : "visible")
        .attr("aria-hidden", isExpanded);
    });

    // ドロワーのリンクがクリックされたらメニューを閉じる
    $("#js-global-menu a").click(function () {
      $("body").toggleClass("is-drawerActive");
      $("#js-hamburger").attr("aria-expanded", false);
      $("#js-global-menu")
        .css("visibility", "hidden")
        .attr("aria-hidden", "true");
      $("#js-drawer-background").removeClass("is-drawerActive");
    });

    // ボタンをクリックしてページトップに戻る
    $(".js-page-top-button").click(function () {
      $("body,html").animate({ scrollTop: 0 }, 1000, "swing");
      return false;
    });

		//インフォメーションメージ タブメニューの設定
		$(document).ready(function () {
      // 初期設定として一番目のタブを表示
      $(".js-content").hide().first().show();
      $(".js-tab").first().addClass("current");

      const hash = window.location.hash;
      if (hash) {
        $(".js-tab").removeClass("current");
        $(".js-content").hide();

        const targetTab = $(`#${hash.substring(1)}`);
        if (targetTab.length) {
          const tabIndex = targetTab.closest(".js-tab").index();
          $(".js-tab").eq(tabIndex).addClass("current");
          $(".js-content").eq(tabIndex).fadeIn(300);
        }
      }

      $(".js-tab").on("click", function (event) {
        const $clickedTab = $(event.target); // クリックされたタブを取得
        const index = $clickedTab.index();

        $(".current").removeClass("current");
        $clickedTab.addClass("current");

        $(".js-content").hide().eq(index).fadeIn(300);

        const tabId = $clickedTab.find("p").attr("id");
        if (tabId) {
          window.location.hash = tabId;
        }
      });
    });











    // アーカイブメニューの動作
    $(".js-year-toggle").click(function () {
      var $monthList = $(this).next(".side-archive__month-list");
      $(".side-archive__month-list").not($monthList).slideUp();
      $monthList.slideToggle();
      $(this).parent(".side-archive__year").toggleClass("active");
    });

    // アコーディオンの動作
    $(".js-accordion-top").click(function () {
      $(this).next().slideToggle(300);
      $(this).toggleClass("is-open");
    });

    // モーダルの開閉
    $(".js-modal-open").click(function () {
      var target = $(this).data("target");
      $("#" + target).fadeIn();
      return false;
    });

    $(".js-modal-close").click(function () {
      $(".js-modal").fadeOut();
      return false;
    });

    // フォーム送信時の検証
    $("form").submit(function (e) {
      var isFormValid = true;

      $('input[type="text"], input[type="email"], textarea').each(function () {
        if ($.trim($(this).val()) === "") {
          $(this).addClass("input-error");
          isFormValid = false;
        } else {
          $(this).removeClass("input-error");
        }
      });

      $.each(
        $.unique(
          $('input[type="radio"]')
            .map(function () {
              return $(this).attr("name");
            })
            .get()
        ),
        function (i, name) {
          if ($('input[name="' + name + '"]:checked').length === 0) {
            isFormValid = false;
          }
        }
      );

      if (!$('input[type="checkbox"][name="privacy"]').is(":checked")) {
        isFormValid = false;
      }

      if (!isFormValid) {
        e.preventDefault();
        window.location.href = "page-contact-error.html";
      }
    });
  });

  // 画面の高さを取得してCSS変数として設定
  function setVh() {
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  }
  window.addEventListener("load", setVh);
  window.addEventListener("resize", setVh);
});


/*-----------------------------------
scf SP版では全角スペースを改行に置換
PC版では、全角スペースを削除
-----------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
  function updateText() {
    var items = document.querySelectorAll(".page-price-list__name");
    items.forEach(function (item) {
      var text = item.innerHTML;
      if (window.innerWidth <= 768) {
        // SP版: 全角スペースを <br> タグに置換
        var modifiedText = text.replace(/　/g, "<br>");
      } else {
        // PC版: 全角スペースを削除
        var modifiedText = text.replace(/　/g, "");
      }
      item.innerHTML = modifiedText;
    });
  }

  // ページ読み込み時とリサイズ時に関数を呼び出す
  updateText();
  window.addEventListener("resize", function () {
    updateText();
  });
});