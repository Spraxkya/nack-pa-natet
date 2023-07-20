
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

const handkodB = document.getElementById('handB');
const handkod = document.getElementById('handMer');

handkodB.addEventListener("click", () => {
    handkod.style.display = handkod.style.display === "none" ? "block" : "none";
    handkodB.innerHTML = handkodB.innerHTML === 'Läs mer' ? 'Läs mindre' : 'Läs mer';
});

const wpB = document.getElementById('wpB');
const wp = document.getElementById('wpMer');

wpB.addEventListener("click", () => {
    wp.style.display = wp.style.display === "none" ? "block" : "none";
    wpB.innerHTML = wpB.innerHTML === 'Läs mer' ? 'Läs mindre' : 'Läs mer';
 });

const kampB = document.getElementById('kampB');
const kamp = document.getElementById('kaMer');

kampB.addEventListener("click", () => {
    kamp.style.display = kamp.style.display === "none" ? "flex" : "none";
    kampB.innerHTML = kampB.innerHTML === 'Läs mer' ? 'Läs mindre' : 'Läs mer';
});

const priceBElements = document.querySelectorAll('.priceB');

priceBElements.forEach(element => {
  element.addEventListener('click', () => {
    const typeInputElement = document.querySelector('input[name="type"]');
    typeInputElement.value = element.id;

    const formElement = document.querySelector('.form');
    formElement.style.display = 'flex';

    const closeBElement = formElement.querySelector('.closeB');
    closeBElement.addEventListener('click', () => {
      formElement.style.display = 'none';
    });
  });
});

function displayFlyElements() {
  var currentIndex = 12;
  var interval = setInterval(function() {
    var currentElement = document.querySelector("#fly" + currentIndex);
    currentElement.style.display = "block";

    // Determine the previous index
    var previousIndex = currentIndex + 1;
    if (previousIndex > 12) {
      previousIndex = 1;
    }

    var previousElement = document.querySelector("#fly" + previousIndex);
    if (previousElement) {
      previousElement.style.display = "none";
    }

    currentIndex--;
    if (currentIndex < 1) {
      currentIndex = 12; // Reset back to the last index
    }
  }, 500);
}

setTimeout(displayFlyElements, 500);