<template>
  <div class="card mb-3">
        <div class="card-body">
          <p>Categoria: {{ post.category ? post.category.name : 'nessuna' }} </p>
          <h5 class="card-title">Titolo card</h5>
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
        Post: Object
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