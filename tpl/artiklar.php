<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Articles</title>
</head>
<body>
    <h1>Latest Articles</h1>
    <div id="post-container"></div>

    <script>
        async function fetchPosts() {
            const response = await fetch('http://localhost/nack-pa-natet/wordpress/wp-json/wp/v2/posts');
            const posts = await response.json();
            return posts;
        }

        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
        }

        async function renderPosts() {
            const postsContainer = document.getElementById('post-container');
            const posts = await fetchPosts();

            posts.forEach(post => {
            const postElement = document.createElement('div');
            const title = document.createElement('a');
            const date = document.createElement('p');
            const image = document.createElement('img');

            title.innerHTML = post.title.rendered;
            title.href = `./tpl/single-article.php?id=${post.id}`; // Add this line to set the article link as the href attribute
            date.innerHTML = 'Published on: ' + formatDate(post.date);

            // Display the featured image
            if (post.featured_media) {
                fetch(`http://localhost/nack-pa-natet/wordpress/wp-json/wp/v2/media/${post.featured_media}`)
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
            });
        }

        renderPosts();
    </script>
</body>
</html>