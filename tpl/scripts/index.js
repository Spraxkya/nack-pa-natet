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
    if (container.childElementCount > 5) {
      container.removeChild(firstClone);
      banner.scrollLeft -= contentWidth;
    }
  }

  // Append a clone to the beginning if scrolling to the left
  if (newScrollLeft < contentWidth) {
    container.prepend(createClone());
    if (container.childElementCount > 5) {
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