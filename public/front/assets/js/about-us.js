let elem = document.querySelectorAll("#about-left li");
for (var i = 0; i < elem.length; i++) {
  elem[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
  });
}
