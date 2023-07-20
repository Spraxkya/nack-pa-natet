var input = document.getElementById("placeholder");
var span = document.createElement("span");
span.style.visibility = "hidden";
span.style.position = "absolute";
span.style.top = "0";
span.style.font = window.getComputedStyle(input).getPropertyValue("font");
span.style.fontSize = window.getComputedStyle(input).getPropertyValue("font-size");
document.body.appendChild(span);

input.value = 'Hemsidor';
var isDeleting = true; // Initialize isDeleting flag

function startTypewriter() {
  setTimeout(writing, 1000); // Start the typewriter effect after 1 second
}

function writing() {
  var words = ["Hemsidor", "Design", "Smultron", "En köpp rivet"]; // Define the words to write
  var i = 0; // Initialize the index
  var j = 0; // Initialize index for word deletion

  // Set an interval to write or delete one letter at a time
  var interval = setInterval(function() {
    var word = words[i]; // Get the current word
    var letters = word.split(''); // Split the word into an array of letters
    var inputVal = input.value; // Get the current input value
    var spanWidth = span.offsetWidth; // Get the width of the span element

    if (!isDeleting) { // If we're writing
      input.value += letters[j]; // Write the next letter
      j++; // Increment the deletion index

      if (j >= letters.length) { // If we've written all the letters
        isDeleting = true; // Set isDeleting flag to true
        j = letters.length - 1; // Reset deletion index
      }
    } else { // If we're deleting
      input.value = inputVal.slice(0, -1); // Delete the last letter
      spanWidth = span.offsetWidth; // Update span width
      input.style.width = spanWidth + 'px'; // Set input width to match span width

      if (input.value === '') { // If we've deleted all the letters
        isDeleting = false; // Set isDeleting flag to false
        i++; // Move on to the next word
        j = 0; // Reset deletion index
        input.style.width = ''; // Reset input width
      }
    }

    span.innerHTML = input.value;
    var width = span.offsetWidth;
    input.style.width = span.offsetWidth + 'px';
    console.log("Width: " + width + "px");

    if (i >= words.length && isDeleting) {
      clearInterval(interval);
      isDeleting = false;
      startTypewriter(); // Restart the typewriter effect
      return; // Exit the current execution of the function
    } else if (i >= words.length && !isDeleting) {
      clearInterval(interval);
      input.value = ''; // Set input value to an empty string
      startTypewriter(); // Restart the typewriter effect
      return; // Exit the current execution of the function
    }
  }, 600); // Set the interval to 600ms for a smoother effect

  input.addEventListener("input", function() {
    clearInterval(interval);
    span.innerHTML = input.value;
    var width = span.offsetWidth;
    input.style.width = span.offsetWidth + 'px';
    console.log("Width: " + width + "px");
  });

  input.addEventListener('focus', function() {
    clearInterval(interval);
    span.innerHTML = input.value;
    var width = span.offsetWidth;
    input.style.width = span.offsetWidth + 'px';
    console.log("Width: " + width + "px");
  });
}

startTypewriter(); // Start the typewriter effect initially

input.addEventListener("input", function() {
  span.innerHTML = input.value;
  var width = span.offsetWidth;
  input.style.width = span.offsetWidth + 'px';
  console.log("Width: " + width + "px");
});

input.addEventListener('focus', function() {
  span.innerHTML = input.value;
  var width = span.offsetWidth;
  input.style.width = span.offsetWidth + 'px';
  console.log("Width: " + width + "px");
});

/* Infinite Banner */

const banner = document.querySelector('.banner');
const container = document.querySelector('.banner .container');
const content = document.querySelector('.banner .content');
const contentWidth = content.offsetWidth;

let isGrabbing = false;
let mouseStart = 0;
let scrollStart = 0;
let lastScroll = 0;
let autoScrollSpeed = 1; // Adjust this value to control the auto-scroll speed

function createClone() {
  return content.cloneNode(true);
}

function adjustClones() {
  const firstClone = container.firstElementChild;
  const lastClone = container.lastElementChild;
  const newScrollLeft = banner.scrollLeft;
  const remainingScrollRight = container.scrollWidth - banner.clientWidth - newScrollLeft;

  // Append a clone to the end if scrolling to the right
  if (remainingScrollRight < contentWidth) {
    container.appendChild(createClone());
    if (container.childElementCount > 8) {
      container.removeChild(firstClone);
      banner.scrollLeft -= contentWidth;
    }
  }

  // Append a clone to the beginning if scrolling to the left
  if (newScrollLeft < contentWidth) {
    container.prepend(createClone());
    if (container.childElementCount > 8) {
      container.removeChild(lastClone);
      banner.scrollLeft += contentWidth;
    }
  }
}

banner.addEventListener('mousemove', e => {
  if (!isGrabbing) return;
  e.preventDefault();
  const mouseDelta = e.clientX - mouseStart;
  const newScrollLeft = scrollStart - mouseDelta;
  banner.scrollLeft = newScrollLeft;

  adjustClones();
});


banner.addEventListener('mousedown', e => {
  isGrabbing = true;
  mouseStart = e.clientX;
  scrollStart = banner.scrollLeft;
  banner.style.cursor = 'grabbing';
});

banner.addEventListener('mousemove', e => {
  if (!isGrabbing) return;
  e.preventDefault();
  const mouseDelta = e.clientX - mouseStart;
  const newScrollLeft = scrollStart - mouseDelta;
  banner.scrollLeft = newScrollLeft;

  adjustClones();
});

banner.addEventListener('mouseup', e => {
  isGrabbing = false;
  banner.style.cursor = 'grab';
});

banner.addEventListener('mouseleave', e => {
  isGrabbing = false;
  banner.style.cursor = 'grab';
});

// Initialize clones
const contentClone1 = createClone();
const contentClone2 = createClone();

container.appendChild(contentClone1);
container.appendChild(contentClone2);

window.onload = function () {
  const info6Position = document.getElementById('info6').offsetLeft;

  // Scroll the banner to the info6 div
  banner.scrollTo({
    left: info6Position,
    behavior: 'instant',
  });
};

// Auto-scroll to the left when not grabbing
function autoScroll() {
  if (!isGrabbing) {
    banner.scrollLeft += autoScrollSpeed;
    adjustClones(autoScrollSpeed);
  }
}

// Start auto-scrolling
const autoScrollInterval = setInterval(autoScroll, 16);