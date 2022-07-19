<template>
  <div class="container">
      <h1> {{ post.title }} </h1>
      <p>Category: {{ categoryName }} </p>
      <p> {{ post.content }} </p>
  </div>
</template>

<script>
export default {
    name: "SinglePost",
    data() {
        return {
            post: null,
        }
    },
    created() {
        this.getPostDetails();
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : "nessuna";
        }
    },
    methods: {
        getPostDetails() {
            const slug = this.$route.params.slug;
            axios.get(`/api/posts/${slug}`).then((resp) => {
                this.post = resp.data.results;
            });
        }
    }
}
</script>

<style>

</style>