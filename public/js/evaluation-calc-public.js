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

  let initiateMeter = () => {
    let timeOutput = $('[name="time_meter"]').val();
    $("#time_meter").val(timeOutput);

    let meterHeight = $(".main-calc .left-box").height();
  };

  let labelClickable = () => {
    $(".evaluation-mcq > div > label").click(function () {
      $(this).prev().click();
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
    initiateMeter();
    labelClickable();
  });

  // ENDS
})(jQuery);
