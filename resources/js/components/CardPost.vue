<template>
  <div class="card mb-3">
        <div class="card-body">
          <p>Categoria: {{ categoryName }} </p>
          <h5 class="card-title"> {{ post.title }} </h5>
          <p class="card-text">
             {{ cutText(post.content, 50) }}
          </p>
        </div>
  </div>
</template>

<script>
export default {
    name: "CardPost",
    props: {
        post: Object
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : "nessuna";
        }
    },
    methods: {
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