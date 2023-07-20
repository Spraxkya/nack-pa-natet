<!DOCTYPE html>
<html lang="en">
<head>
    <title> Blogg | Näck på nätet </title>
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
    <link rel="stylesheet" type="text/css" href="../tpl/styles/artiklar.css?01"/>
    <link rel="stylesheet" type="text/css" href="../tpl/styles/header.css"/>
    <link rel="stylesheet" type="text/css" href="../tpl/styles/footer.css"/>
    <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.14/build/player/lottie.min.js"></script>
</head>
<body>
<?php
        include './header.php';
?>
    <div id="lottie-animation-1"></div>
    <h1>Tankar, idéer & en å annan nyhet</h1>
    <div id="post-container"></div>
    <button id="load-more">Ladda fler</button>
    <span id="full" style="display:none;"> Alla inlägg är laddade!</span>

<script>
    let page = 1; // Set the initial page to 2 to avoid loading the latest post twice
    const postsContainer = document.getElementById('post-container');
    const loadMoreButton = document.getElementById('load-more');
    const fullSpan = document.getElementById('full');
    
    async function fetchLatestPost() {
        const response = await fetch('../wordpress/wp-json/wp/v2/posts?per_page=1');
        const posts = await response.json();
        return posts[0];
    }
    
    async function fetchPosts(page) {
        const response = await fetch(`../wordpress/wp-json/wp/v2/posts?page=${page}`);
        const data = await response.json();

        if (data.code === 'rest_post_invalid_page_number') {
            return []; // Return an empty array if the requested page number is greater than the total number of pages
        }

        return data;
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
    }

    async function renderLatestPost() {
        const latestPost = await fetchLatestPost();
        
        const postElement = document.createElement('div');
        const title = document.createElement('a');
        const date = document.createElement('p');
        const image = document.createElement('img');

        title.innerHTML = latestPost.title.rendered;
        title.href = `https://www.nack-pa-natet.se/blogg/artikel?id=${latestPost.id}`;
        date.innerHTML = 'Published on: ' + formatDate(latestPost.date);

        if (latestPost.featured_media) {
            fetch(`../wordpress/wp-json/wp/v2/media/${latestPost.featured_media}`)
            .then(response => response.json())
            .then(media => {
                image.src = media.source_url;
            })
            .catch(error => console.error('Error fetching featured media:', error));
        }

        postElement.appendChild(image);
        postElement.appendChild(date);
        postElement.appendChild(title);

        postsContainer.appendChild(postElement);
    }
    
    let nextPostIndex = 0; // Keep track of the index of the next post to render, starting from 0

    async function renderPosts() {
        const postsContainer = document.getElementById('post-container');
        const post = await fetchPost(nextPostIndex);

        if (!post) { // If there are no more posts, stop rendering
            return;
        }

        const postElement = document.createElement('div');
        postElement.className = 'post';

        const image = document.createElement('img');

        // Display the featured image
        if (post.featured_media) {
            fetch(`../wordpress/wp-json/wp/v2/media/${post.featured_media}`)
            .then(response => response.json())
            .then(media => {
            image.src = media.source_url;
            })
            .catch(error => console.error('Error fetching featured media:', error));
        }

        const postContent = document.createElement('div');
        postContent.className = 'post-content';

        const date = document.createElement('p');
        date.className = 'post-date';
        date.innerHTML = formatDate(post.date);

        const title = document.createElement('h2');
        title.innerHTML = post.title.rendered;

        const excerpt = document.createElement('p');
        excerpt.innerHTML = post.excerpt.rendered;

        const buttonContainer = document.createElement('div');
        buttonContainer.className = 'button-container';

        const learnMoreButton = document.createElement('a');
        learnMoreButton.innerHTML = 'Läs mer!';
        learnMoreButton.href = `https://www.nack-pa-natet.se/blogg/artikel?id=${post.id}`;

        buttonContainer.appendChild(learnMoreButton);

        postContent.appendChild(date);
        postContent.appendChild(title);
        postContent.appendChild(excerpt);
        postContent.appendChild(buttonContainer);

        postElement.appendChild(image);
        postElement.appendChild(postContent);

        postElement.addEventListener('click', () => {
            window.location.href = `https://www.nack-pa-natet.se/blogg/artikel?id=${post.id}`;
        });

        postsContainer.appendChild(postElement);

        nextPostIndex++; // Increment the index of the next post to render
    }

    async function fetchPost(index) {
        const posts = await fetchPosts(page);
        const post = posts[index];

        if (!post) {
            const nextPagePosts = await fetchPosts(page + 1);

            if (nextPagePosts.length === 0) {
                hideLoadMoreButton();
                return null;
            }

            page++;
            nextPostIndex = 0;
            return nextPagePosts[0];
        }

        if (index === posts.length - 1) {
            page++;
            nextPostIndex = 0;
        }

        return post;
    }

    async function fetchPosts(page) {
        const response = await fetch(`../wordpress/wp-json/wp/v2/posts?page=${page}`);
        const data = await response.json();

        if (data.code === 'rest_post_invalid_page_number') {
            return []; // Return an empty array if the requested page number is greater than the total number of pages
        }

        return data;
    }

    function hideLoadMoreButton() {
        const loadMoreButton = document.getElementById('load-more');
        loadMoreButton.style.display = 'none';
        fullSpan.style.display = 'block';
    }

    async function loadInitialPosts() {
        await renderPosts();
        await renderPosts();
        await renderPosts();
    }

    loadInitialPosts();
    loadMoreButton.addEventListener('click', renderPosts); // Add event listener to render one more post on button click

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

<?php
    include './footer.php';
?>
</body>
</html>