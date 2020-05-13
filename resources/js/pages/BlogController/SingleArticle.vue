<template>
<div>
  <h1>Welcome to: BlogController@singleArticle</h1>
  <h2>{{ $store.state.articles.active.title }}</h2>
  <RouterLink :to="{ name: 'BlogController@HomePage' }">Home</RouterLink>
  <p>{{ $store.state.articles.active.content }}</p>
</div>
</template>

<script>
export default {
  //
}
</script>
