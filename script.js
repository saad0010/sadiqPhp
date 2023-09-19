$(document).ready(function () {
  // show automatically after 1s
  setTimeout(showModal, 1000);
  $("#close").click(function () {
    $("#popup").hide();
    document.body.classList.remove("active-popup");
  });

  function showModal() {
    // get value from localStorage
    var is_modal_show = sessionStorage.getItem("alreadyShow");
    if (is_modal_show != "alredy shown") {
      $("#popup").show();
      document.body.classList.add("active-popup");
      sessionStorage.setItem("alreadyShow", "alredy shown");
    } else {
      console.log(is_modal_show);
    }
  }
});
