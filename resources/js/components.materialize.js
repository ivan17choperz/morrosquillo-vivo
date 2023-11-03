// form-input
document.addEventListener("DOMContentLoaded", function () {
    var $inputSelect = document.querySelectorAll("select");
    var instances = M.FormSelect.init($inputSelect, {});
});

// slider
document.addEventListener("DOMContentLoaded", function () {
    var elems = document.querySelectorAll(".slider");
    var instances = M.Slider.init(elems, {
        interval: 3500,
        indicators: false,
        height: 800,
        duration: 800,
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var elems = document.querySelectorAll(".dropdown-trigger");
    var instances = M.Dropdown.init(elems, {
        constrainWidth: false,
        coverTrigger: false,
    });
});

// parallax

document.addEventListener("DOMContentLoaded", function () {
    var elems = document.querySelectorAll(".parallax");
    var instances = M.Parallax.init(elems);
});


// collapsible
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });
