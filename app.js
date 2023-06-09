$("#subscription_form").on("submit", function (e) {
  e.preventDefault();
  var $form = $(this);
  $.ajax({
    type: "POST",
    url: "subscription_ajax.php",
    data: $form.serialize(),
  })
    .done(function () {
      $form[0].reset();
      alert("Thank you for the subscription!");
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      if (jqXHR.status === 400) {
        alert("Bad request. Please check your inputs.");
      } else if (jqXHR.status === 500) {
        alert("Internal server error. Please try again later.");
      } else {
        alert("Something went wrong. Please try again.");
      }
    });
});
