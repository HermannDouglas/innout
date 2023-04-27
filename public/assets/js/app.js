(function () {
  const menuToggle = document.querySelector(".menu-toggle");
  menuToggle.onclick = function (e) {
    const body = docuemnt.querySelector("body");
    body.ClassList.toggle("hide-sidebar");
  };
})();
