<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single Post</title>
</head>
<body>
  <div id="post-container"></div>

  <script>
    function getQueryParam(name) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name);
    }

    async function fetchPost(id) {
      const response = await fetch(`http://localhost/nack-pa-natet/wordpress/wp-json/wp/v2/posts/${id}`);
      const post = await response.json();
      return post;
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
    }

    async function renderPost() {
      const postId = getQueryParam('id');
      const postContainer = document.getElementById('post-container');
      const post = await fetchPost(postId);

      const title = document.createElement('h2');
      const date = document.createElement('p');
      const content = document.createElement('div');

      title.innerHTML = post.title.rendered;
      date.innerHTML = 'Published on: ' + formatDate(post.date);
      content.innerHTML = post.content.rendered;

      postContainer.appendChild(title);
      postContainer.appendChild(date);
      postContainer.appendChild(content);
    }

    renderPost();
  </script>
</body>
</html>