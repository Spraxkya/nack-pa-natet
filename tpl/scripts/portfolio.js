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
    banner.scrollLeft -= autoScrollSpeed;
    adjustClones(autoScrollSpeed);
  }
}

// Start auto-scrolling
const autoScrollInterval = setInterval(autoScroll, 16);

/* infinite banner2 */

const banner2 = document.querySelector('.banner2');
const container2 = document.querySelector('.banner2 .container');
const content2 = document.querySelector('.banner2 .content');
const contentWidth2 = content2.offsetWidth;

let isGrabbing2 = false;
let mouseStart2 = 0;
let scrollStart2 = 0;
let lastScroll2 = 0;
let autoScrollSpeed2 = 1; // Adjust this value to control the auto-scroll speed

function createClone2() {
  return content2.cloneNode(true);
}

function adjustClones2() {
  const firstClone2 = container2.firstElementChild;
  const lastClone2 = container2.lastElementChild;
  const newScrollLeft2 = banner2.scrollLeft;
  const remainingScrollRight2 = container2.scrollWidth - banner2.clientWidth - newScrollLeft2;

  // Append a clone to the end if scrolling to the right
  if (remainingScrollRight2 < contentWidth2) {
    container2.appendChild(createClone2());
    if (container2.childElementCount > 5) {
      container2.removeChild(firstClone2);
      banner2.scrollLeft  -= contentWidth2;
    }
  }

  // Append a clone to the beginning if scrolling to the left
  if (newScrollLeft2 < contentWidth2) {
    container2.prepend(createClone2());
    if (container2.childElementCount > 5) {
      container2.removeChild(lastClone2);
      banner2.scrollLeft += contentWidth2;
    }
  }
}

banner2.addEventListener('mousemove', e => {
  if (!isGrabbing2) return;
  e.preventDefault();
  const mouseDelta2 = e.clientX - mouseStart2;
  const newScrollLeft2 = scrollStart2 - mouseDelta2;
  banner2.scrollLeft = newScrollLeft2;

  adjustClones2();
});


banner2.addEventListener('mousedown', e => {
  isGrabbing2 = true;
  mouseStart2 = e.clientX;
  scrollStart2 = banner2.scrollLeft;
  banner2.style.cursor = 'grabbing';
});

banner2.addEventListener('mousemove', e => {
  if (!isGrabbing2) return;
  e.preventDefault();
  const mouseDelta2 = e.clientX - mouseStart2;
  const newScrollLeft2 = scrollStart2 - mouseDelta2;
  banner2.scrollLeft = newScrollLeft2;

  adjustClones2();
});

banner2.addEventListener('mouseup', e => {
  isGrabbing2 = false;
  banner2.style.cursor = 'grab';
});

banner2.addEventListener('mouseleave', e => {
  isGrabbing2 = false;
  banner2.style.cursor = 'grab';
});

// Initialize clones
const content2Clone12 = createClone2();
const content2Clone22 = createClone2();

container2.appendChild(content2Clone12);
container2.appendChild(content2Clone22);

window.onload = function () {
  const info6Position2 = document.getElementById('info12').offsetLeft;

  // Scroll the banner to the info6 div
  banner2.scrollTo({
    left: info6Position2,
    behavior: 'instant',
  });
};

// Auto-scroll to the left when not grabbing
function autoScroll2() {
  if (!isGrabbing2) {
    banner2.scrollLeft += autoScrollSpeed2;
    adjustClones2(autoScrollSpeed2);
  }
}

// Start auto-scrolling
const autoScrollInterval2 = setInterval(autoScroll2, 16);