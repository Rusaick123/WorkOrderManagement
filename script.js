function showOtherWorkField() {
  var worktype = document.getElementById("worktype");
  var otherWorkField = document.getElementById("other_work_field");
  if (worktype.value === "Other") {
    otherWorkField.style.display = "block";
  } else {
    otherWorkField.style.display = "none";
  }
}

function limitTextCount(event) {
  var textarea = event.target;
  if (textarea.value.length > 5000) {
    textarea.value = textarea.value.substring(0, 5000);
    alert("Text limit of 5000 characters exceeded!");
  }
}
document.getElementById("date").addEventListener("change", function () {
  var date = new Date(this.value);
  var day = ("0" + date.getDate()).slice(-2);
  var month = ("0" + (date.getMonth() + 1)).slice(-2);
  var year = date.getFullYear();
  this.value = year + "-" + month + "-" + day;
});
