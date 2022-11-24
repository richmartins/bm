const els = document.querySelectorAll("nav ul li");
els.forEach((el) => {
    el.addEventListener("click", function(){
        const target = document.getElementById(this.dataset.goto)
        target.scrollIntoView({ behavior: "smooth" });
    });
});
