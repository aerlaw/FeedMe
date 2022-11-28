document.querySelectorAll(".show-login").forEach(function(el, i) {
    el.addEventListener("click", function() {
        document.querySelector(".popup").classList.add("active");
    });
});