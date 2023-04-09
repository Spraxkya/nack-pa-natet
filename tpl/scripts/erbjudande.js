const pris1 = document.getElementById("pris1");
const priser1 = document.getElementById("priser1");
const offer1 = document.querySelector(".offer-1");

pris1.addEventListener("click", () => {
    priser1.style.display = priser1.style.display === "none" ? "flex" : "none";
    offer1.style.height = priser1.style.display === "flex" ? "fit-content" : "unset";
});

const pris2 = document.getElementById("pris2");
const priser2 = document.getElementById("priser2");
const offer2 = document.querySelector(".offer-2");

pris2.addEventListener("click", () => {
    priser2.style.display = priser2.style.display === "none" ? "flex" : "none";
    offer2.style.height = priser2.style.display === "flex" ? "fit-content" : "unset";
});

function scale() {

    var detail1 = document.getElementById('detail1');
    var detail2 = document.getElementById('detail2');

    detail2.style.height = detail1.clientHeight + 'px';
    console.log(detail1.clientHeight);
}

window.onresize = scale;
window.onload = scale;