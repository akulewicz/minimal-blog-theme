const postsBox = document.querySelector(".posts--js");

const getPost = async (id) => {
  const url = "https://www.poruszeni.pl/wp-json/wp/v2/posts";
  const response = await fetch(url);
  const data = await response.json();
  return data[id];
};

const getPostImage = async (id) => {
  const url = `https://poruszeni.pl/wp-json/wp/v2/media/${id}`;
  const response = await fetch(url);
  const data = await response.json();
  return data;
};

const getPostData = async (id) => {
  const postData = await getPost(id);
  const postImage = await getPostImage(postData.featured_media);
  return { postData, postImage };
};

const updateUI = (data) => {
  const image = data.postImage;
  const content = data.postData;
  let article = `
    <article class="post">
        <img class="post__image" src="${image.source_url}">
        <div class="post__content">
        <p class="post__info">Kategoria | Mar 18, 2020</p>
        <h3 class="post__title">${content.title.rendered}</h3>
        <div class="post__excerpt">${content.excerpt.rendered}</div>
        </div>
    </article>
    `;
  postsBox.innerHTML += article;
};

for (let i = 0; i <= 9; i++) {
  getPostData(i).then((data) => updateUI(data));
}
