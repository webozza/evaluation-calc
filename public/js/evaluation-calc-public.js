(function ($) {
  "use strict";

  let removeWhenProduction = () => {
    $("#modal-1-content > ul > li > a").each(function () {
      let links = $(this);
      if (links.text() !== "Evaluation Calculator") {
        links.parent().remove();
      }
    });
  };

  // Form Validation
  let do_validation = async () => {
    $(".evaluation-form-container form").on("submit", function (e) {
      e.preventDefault();

      // add error message for checkbox groups without selection
      $(".evaluation-question").each(function () {
        let result = $(this).find(".selected_answer");
        let errorExists = $(this).find(".not-selected-error-msg");

        if (result.val() == "" && errorExists.length == 0) {
          result.after(
            `<span class="not-selected-error-msg" style="color:red;">please tick at least 1 box</span>`
          );
        } else if (result.val() !== "" && errorExists.length == 1) {
          errorExists.remove();
        }
      });

      // check if all mcq's have been filled
      let checkboxHasError = $(this).find(".not-selected-error-msg").length;
      console.log(checkboxHasError);

      if (checkboxHasError == 0) {
        $(".evaluation-form-container form").unbind().submit();
      }

      // on submit ends
    });
  };

  // Single Choice
  let questionValidation = () => {
    let checkBox = $(
      '.evaluation-question:not(.allow-multiple) input[type="checkbox"]'
    );

    checkBox.click(function () {
      // Allow single choice only
      $(this).parent().siblings().find("input").prop("checked", false);

      let selectedAnswer = $(this).val();

      $(this)
        .parent()
        .parent()
        .parent()
        .find(".selected_answer")
        .val(selectedAnswer);

      // Remove value if 0 selected for any single choice mcq
      $(".evaluation-mcq:not(.allow-multiple)").each(function () {
        let eQ = $(this);
        let numberOfChecked = eQ.find("input:checkbox:checked").length;
        if (numberOfChecked == 0) {
          eQ.parent().find(".selected_answer").val("");
        }
      });
    });
  };

  let multipleAnswers2 = () => {
    $(
      '.evaluation-question.allow-multiple.question-2 input[type="checkbox"]'
    ).click(function () {
      var arr = [];
      $.each(
        $(
          ".evaluation-question.allow-multiple.question-2 input[type='checkbox']:checked"
        ),
        function () {
          arr.push($(this).val());
        }
      );
      $(this)
        .parent()
        .parent()
        .parent()
        .find(".selected_answer")
        .val(arr.join(","));
    });
  };

  let multipleAnswers3 = () => {
    $(
      '.evaluation-question.allow-multiple.question-3 input[type="checkbox"]'
    ).click(function () {
      var arr = [];
      $.each(
        $(
          ".evaluation-question.allow-multiple.question-3 input[type='checkbox']:checked"
        ),
        function () {
          arr.push($(this).val());
        }
      );
      $(this)
        .parent()
        .parent()
        .parent()
        .find(".selected_answer")
        .val(arr.join(","));
    });
  };

  let multipleAnswers5 = () => {
    $(
      '.evaluation-question.allow-multiple.question-5 input[type="checkbox"]'
    ).click(function () {
      var arr = [];
      $.each(
        $(
          ".evaluation-question.allow-multiple.question-5 input[type='checkbox']:checked"
        ),
        function () {
          arr.push($(this).val());
        }
      );
      $(this)
        .parent()
        .parent()
        .parent()
        .find(".selected_answer")
        .val(arr.join(","));
    });
  };

  let labelClickable = () => {
    $(".evaluation-mcq > div > label").click(function () {
      $(this).prev().click();
    });
  };

  let uploadImageAPI = () => {
    // SDK initialization

    var imagekit = new ImageKit({
      publicKey: "public_5PYx8mmWhmCe2f0BBgqapM7pTDM=",
      urlEndpoint: "https://ik.imagekit.io/33ju55zzt",
      authenticationEndpoint: "http://www.yourserver.com/auth",
    });
    // URL generation

    var imageURL = imagekit.url({
      path: "/default-image.jpg",
      transformation: [
        {
          height: "300",
          width: "400",
        },
      ],
    });
    // Upload function internally uses the ImageKit.io javascript SDK

    function upload(data) {
      var file = document.getElementById("file1");
      imagekit.upload(
        {
          file: file.files[0],
          fileName: "abc1.jpg",
          tags: ["tag1"],
        },
        function (err, result) {
          console.log(arguments);

          console.log(
            imagekit.url({
              src: result.url,
              transformation: [
                {
                  height: 300,
                  width: 400,
                },
              ],
            })
          );
        }
      );
    }
  };

  let resubmitForm = () => {
    // after going back for single answer
    $(".evaluation-question:not(.allow-multiple)").each(function () {
      let checkedVal = $(this).find('input[type="checkbox"]:checked').val();
      $(".selected_answer").val(checkedVal);
    });

    // after going back for multiple answer
    let selectedAnswers = [];
    $(
      '.evaluation-question.allow-multiple input[type="checkbox"]:checked'
    ).each(function () {
      selectedAnswers.push($(this).val());
      $(".evaluation-question.allow-multiple .selected_answer").val(
        selectedAnswers.join(",")
      );
    });

    // going back click
    $(".btn-refresh a").click(function () {
      window.history.go($(this).data("back-count"));
    });
  };

  let loadingScreen = () => {
    $("#main").append(`
        <div class="loading-screen" style="display:none;">
            <div class="inner">
                <img src="/wp-content/plugins/evaluation-calc/public/img/loading.gif">
                <p>Please hold on while we prepare your document ...</p>
            </div>
        </div>
    `);
  };

  let list1 = () => {
    $(".list-1 li").each(function () {
      let getList1 = $(this).text();
      $(".time-estimate form").append(`
          <input type="hidden" name="list__1[]" value="${getList1}">
      `);
    });
    $(".list-2 li").each(function () {
      let getList2 = $(this).text();
      $(".time-estimate form").append(`
          <input type="hidden" name="list__2[]" value="${getList2}">
      `);
    });
  };

  // Functions fired on initialization
  $(window).on("load", function () {
    // do_evaluation();
    removeWhenProduction();
    questionValidation();
    multipleAnswers2();
    multipleAnswers3();
    multipleAnswers5();
    do_validation();
    labelClickable();
    resubmitForm();
    loadingScreen();
    list1();
  });

  // ENDS
})(jQuery);
