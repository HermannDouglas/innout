(function () {
  const menuToggle = document.querySelector(".menu-toggle");
  menuToggle.onclick = function (e) {
    const body = document.querySelector("body");
    body.ClassList.toggle("hide-sidebar");
  };
})();
