
// form-input
document.addEventListener("DOMContentLoaded", function () {
    var $inputSelect = document.querySelectorAll("select");
    var instances = M.FormSelect.init($inputSelect, {});
});

// slider
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
        interval:2000,
        indicators:false,
        height:500,
        duration:1000
    });
  });
