var pmodel = document.querySelector(".pmodel"),
    btn = document.querySelector(".about"),
    x = document.querySelector(".x");

btn.addEventListener("click", pop);

function pop() {
    pmodel.style.display = "block";
}

x.addEventListener("click", exit);

function exit() {
    pmodel.style.display = "none";
}