<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="eNBc7Cwi3V09UMFuT71TavlUyDX_eCZ5ThHZb6nb4jQ" />
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <meta http-equiv=”content-language” content=”sv-SE”/>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Näck på nätets blogg">
  <meta property="og:title" content="Blogg | Näck på nätet">
  <meta property="og:description" content="Näck på nätets blogg">
  <meta property="og:image" content="https://www.nack-pa-natet.se/tpl/images/meta/blg.webp">
  <meta property="og:url" content="https://www.nack-pa-natet.se/blogg">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="nack-pa-natet.se">
  <meta property="twitter:url" content="https://www.nack-pa-natet.se/blogg">
  <meta name="twitter:title" content="Blogg | Näck på nätet">
  <meta name="twitter:description" content="Näck på nätets blogg">
  <meta name="twitter:image" content="https://www.nack-pa-natet.se/tpl/images/meta/blg.webp">
  <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../tpl/styles/single.css?008"/>
  <link rel="stylesheet" type="text/css" href="../tpl/styles/header.css"/>
  <link rel="stylesheet" type="text/css" href="../tpl/styles/footer.css"/>
  <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.14/build/player/lottie.min.js"></script>
</head>
<body>
<?php
        include '../header.php';
?>

<div id="lottie-animation-1"></div>
<div id="post-container"></div>

<script>

function getQueryParam(name) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(name);
}

async function fetchPost(id) {
  const response = await fetch(`../../wordpress/wp-json/wp/v2/posts/${id}`);
  const post = await response.json();
  return post;
}

async function fetchImage(id) {
  const response = await fetch(`../../wordpress/wp-json/wp/v2/media/${id}`);
  const image = await response.json();
  return image;
}

async function fetchAuthor(id) {
  const response = await fetch(`../../wordpress/wp-json/wp/v2/users/${id}`);
  const author = await response.json();
  return author;
}

function formatDate(dateString) {
  const date = new Date(dateString);
  return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
}

function createImage(sourceUrl) {
  const image = document.createElement('img');
  image.src = sourceUrl;
  return image;
}

// Wrap the meta tag modification code in a separate function
function updateMetaTags(formattedTitle, description, imageUrl) {
  // Update the document title
  document.title = formattedTitle;

  // Update the description meta tag
  var descriptionMeta = document.querySelector('meta[name="description"]');
  descriptionMeta.setAttribute('content', description);

  // Update the Open Graph meta tags
  var ogTitleMeta = document.querySelector('meta[property="og:title"]');
  ogTitleMeta.setAttribute('content', formattedTitle);

  var ogDescriptionMeta = document.querySelector('meta[property="og:description"]');
  ogDescriptionMeta.setAttribute('content', description);

  var ogImageMeta = document.querySelector('meta[property="og:image"]');
  ogImageMeta.setAttribute('content', imageUrl);

  var ogUrlMeta = document.querySelector('meta[property="og:url"]');
  ogUrlMeta.setAttribute('content', 'https://www.nack-pa-natet.se/blogg/artikel' + window.location.search);

  // Update the Twitter meta tags
  var twitterTitleMeta = document.querySelector('meta[name="twitter:title"]');
  twitterTitleMeta.setAttribute('content', formattedTitle);

  var twitterDescriptionMeta = document.querySelector('meta[name="twitter:description"]');
  twitterDescriptionMeta.setAttribute('content', description);

  var twitterImageMeta = document.querySelector('meta[name="twitter:image"]');
  twitterImageMeta.setAttribute('content', imageUrl);

  var twitterUrlMeta = document.querySelector('meta[property="twitter:url"]');
  twitterUrlMeta.setAttribute('content', 'https://www.nack-pa-natet.se/blogg/artikel' + window.location.search);
}

async function renderPost() {
  const postId = getQueryParam('id');
  const post = await fetchPost(postId);
  const author = await fetchAuthor(post.author);
  const image = await fetchImage(post.featured_media);

  const postContainer = document.getElementById('post-container');
  const title = document.createElement('h2');
  const date = document.createElement('p');
  const authorName = document.createElement('p');
  const authorAvatar = document.createElement('img');
  const content = document.createElement('div');
  const contactTitle = document.createElement('h3');
  const contactInfo = document.createElement('div');
  const buttonContainer = document.createElement('div');
  const editButton = document.createElement('a');
  const deleteButton = document.createElement('a');
  const emptyParagraph = document.createElement('p');

  title.innerHTML = post.title.rendered;
  date.innerHTML = 'Publicerat den: ' + formatDate(post.date);
  authorName.innerHTML = author.name;
  authorAvatar.src = author.avatar_urls['200'];
  content.innerHTML = post.content.rendered;
  contactTitle.innerHTML = 'Skribent';

  if (author.name === 'Rikard Johansson') {
    emptyParagraph.innerHTML = 'Hej! <br> Jag heter Rikard och jobbar som webbutvecklare på Näck på nätet. <br> Hör gärna av dig om du har en någon konstig idé!'
    editButton.innerHTML = '073 685 1904';
    editButton.href = `tel:+46736851904`;
    deleteButton.innerHTML = 'rikard.johansson@nack-pa-natet.se';
    deleteButton.href = 'mailto:rikard.johansson@nack-pa-natet.se';
  }

  if (author.name === 'Gustav Lind') {
    emptyParagraph.innerHTML = 'Hej! <br> Jag heter Gustav och är med i allt som har med Näck på nätet att göra. <br> Har du några frågor så hör gärna av dig!'
    editButton.innerHTML = '073 684 3003';
    editButton.href = `tel:+46736843003`;
    deleteButton.innerHTML = 'gustav.lind@nack-pa-natet.se';
    deleteButton.href = 'mailto:gustav.lind@nack-pa-natet.se';
  }

  // Create two new div elements and append the relevant child elements to each one
  const authorContainer = document.createElement('div');
  authorContainer.appendChild(authorAvatar);
  buttonContainer.appendChild(authorName);
  buttonContainer.appendChild(emptyParagraph);
  buttonContainer.appendChild(editButton);
  buttonContainer.appendChild(deleteButton);
  authorContainer.appendChild(buttonContainer);

  const mediaContainer = document.createElement('div');
  if (image && image.source_url) {
    const imageElement = createImage(image.source_url);
    mediaContainer.appendChild(imageElement);
  }
  mediaContainer.appendChild(content);

  postContainer.appendChild(date);
  postContainer.appendChild(title);
  postContainer.appendChild(mediaContainer);
  postContainer.appendChild(contactTitle);
  postContainer.appendChild(authorContainer);

  var postTitle = post.title.rendered;
  var decodedTitle = document.createElement('textarea');
  decodedTitle.innerHTML = postTitle;
  var formattedTitle = decodedTitle.value;

  console.log(formattedTitle, 'Kom och läs blogginlägget ' + formattedTitle, image.source_url);

  updateMetaTags(formattedTitle, 'Kom och läs blogginlägget ' + formattedTitle, image.source_url);

  console.log(window.location.search);
}

document.addEventListener('DOMContentLoaded', renderPost);
</script>

<h1>Fler artiklar!</h1>

<div id="post-container2"></div>

<script>
  function getQueryParam(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  async function fetchPosts() {
    const response = await fetch('../../wordpress/wp-json/wp/v2/posts');
    const posts = await response.json();
    return posts;
  }

  async function fetchPost(id) {
    const response = await fetch(`../../wordpress/wp-json/wp/v2/posts/${id}`);
    const post = await response.json();
    return post;
  }

  async function fetchImage(id) {
    const response = await fetch(`../../wordpress/wp-json/wp/v2/media/${id}`);
    const image = await response.json();
    return image;
  }

  function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
  }

  function truncateText(text, maxRows) {
    const lines = text.trim().split('\n');
    if (lines.length <= maxRows) {
      return text.trim();
    } else {
      return lines.slice(0, maxRows).join('\n').trim();
    }
  }

  async function renderPosts() {
    const postId = getQueryParam('id');
    const postContainer = document.getElementById('post-container2');
    const posts = await fetchPosts();
    const currentPost = await fetchPost(postId);

    const latestPosts = posts
      .filter(post => post.id !== currentPost.id)
      .sort((a, b) => new Date(b.date) - new Date(a.date))
      .slice(0, 3);

    for (const post of latestPosts) {
      const image = await fetchImage(post.featured_media);
      const truncatedContent = truncateText(post.content.rendered, 3);

      const postElement = document.createElement('div');
      postElement.className = 'post';

      const imageContainer = document.createElement('div');
      imageContainer.className = 'image';
      imageContainer.appendChild(image && image.source_url ? createImage(image.source_url) : createPlaceholderImage());
      postElement.appendChild(imageContainer);

      const textContainer = document.createElement('div');
      textContainer.className = 'text';

      const date = document.createElement('p');
      date.innerHTML = formatDate(post.date);
      textContainer.appendChild(date);

      const title = document.createElement('h2');
      title.innerHTML = post.title.rendered;
      textContainer.appendChild(title);

      const content = document.createElement('div');
      content.innerHTML = truncatedContent;
      textContainer.appendChild(content);

      const button = document.createElement('a');
      button.className = 'button';
      button.innerHTML = 'Läs mer!';
      button.href = `https://www.nack-pa-natet.se/blogg/artikel?id=${post.id}`;
      textContainer.appendChild(button);

      postElement.appendChild(textContainer);

      postContainer.appendChild(postElement);
    }
  }

  function createImage(sourceUrl) {
    const image = document.createElement('img');
    image.src = sourceUrl;
    return image;
  }

  function createPlaceholderImage() {
    const image = document.createElement('div');
    image.className = 'placeholder';
    return image;
  }

  renderPosts();

  function loadLottieAnimations() {
          // Load the Lottie animations here
      lottie.loadAnimation({
          container: document.getElementById('lottie-animation-1'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: '../tpl/images/journalist-notes.json'
      });
  }

  document.addEventListener('DOMContentLoaded', function() {
      if (typeof lottie !== 'undefined') {
          loadLottieAnimations();
          console.log('It is loaded');
      } else {
          console.error('Lottie library is not loaded');
      }
  });

</script>
    <div class="last">
      <a href="https://www.nack-pa-natet.se/blogg"><button> Fler artiklar </button></a>
    </div>
<?php
  include '../footer.php';
?>
<script src="../tpl/scripts/header.js"></script>
<script src="../tpl/scripts/footer.js"></script>
</body>
</html>