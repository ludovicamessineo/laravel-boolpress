<template>
  <div class="container">
      <h2 class="mb-3">Elenco dei post</h2>
      <div class="row row-cols-3">

          <div v-for="post in posts" :key="post.id" class="col">
              <CardPost :post="post"/>
          </div>

      </div>
  </div>
</template>

<script>
import CardPost from "../components/CardPost.vue"
export default {
    name: "Post",
    components: {
        CardPost,
    },
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
        }   
    }
}
</script>

<style>

</style>