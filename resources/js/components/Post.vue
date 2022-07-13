<template>
  <div class="container">
      <h2 class="mb-3">Elenco dei post</h2>
      <div class="row row-cols-3">

          <div v-for="post in posts" :key="post.id" class="col">
              <div class="card mb-3">
                  <div class="card-body">
                      <h5 class="card-title">Titolo card</h5>
                      <p class="card-text">
                          {{ cutText(post.content, 50) }}
                      </p>
                  </div>
              </div>
          </div>

      </div>
  </div>
</template>

<script>
export default {
    name: "Post",
    data() {
        return {
            posts: []
        }
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get("http://127.0.0.1:8000/api/posts")
            .then(resp => {
                this.posts = resp.data.results;
            })
        },
        cutText(text, maxCharNumb) {
            if (text.length > maxCharNumb) {
                return text.substr(0, maxCharNumb) + '...';
            }
            return text;
        }
    }
}
</script>

<style>

</style>