let headerNav = document.getElementsByTagName("nav");
let headerLink = document.querySelectorAll(".menu-link");
for (var i = 0; i < headerLink.length; i++) {
  headerLink[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
  });
}

let header = document.getElementById("header");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    header.classList.add("menu-responsive");
  } else {
    header.classList.remove("menu-responsive");
  }
}

let rightContent = document.getElementById("right-menu");
var rightbar = "close";
$("#rightbarOpen").click(function () {
  if (rightbar == "close") {
    $(rightContent).css("right", "0");
    rightbar = "open"
  }
})
$("#rightbarClose").click(function () {
  if (rightbar == "open") {
    $(rightContent).css("right", "-450px")
    rightbar = "close"
  }
})

$(document).ready(function () {
  $("#searchOpen").click(function () {

    $("#search").toggleClass("hidden")
      .hide()
      .fadeIn();
  });
  $("#searchClose").click(function () {
    $("#search").toggleClass("hidden");
  });
});