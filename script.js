$("#loading").hide();
function generateResponse() {
  $("#loading").show();
  var text = document.getElementById("text");
  var response = document.getElementById("response");
  var langue = document.getElementById("langue").value;


  fetch("response.php", {
    method: "post",
    body: JSON.stringify({
      text: text.value+" . Répond unqiuement en "+langue,
    }),
  })
    .then((res) => res.text())
    .then((res) => {
      response.innerHTML = res;
      //empty text input
      text.value = "";
      //hide loading
      $("#loading").hide();
    });
}
