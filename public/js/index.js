const els = document.querySelectorAll("nav ul li");
els.forEach((el) => {
    el.addEventListener("click", function(){
        const target = document.getElementById(this.dataset.goto)
        target.scrollIntoView({ behavior: "smooth" });
    });
});


const bgMenu = document.getElementById("bg-menu")

bgMenu.addEventListener("click", (e) => {
    const navBar = document.getElementById("nav-bar-ul")

    if(navBar.classList.contains("display")) {
        navBar.classList.remove("display")
    } else {
        navBar.classList.add("display")
    }
})
