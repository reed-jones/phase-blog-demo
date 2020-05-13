<template>
    <div>
        <h1>Welcome to: BlogController@homePage</h1>
        <ul>
            <RouterLink
                :to="{ name: 'BlogController@SingleArticle', params: { article: article.slug }}"
                v-for="article in $store.state.articles.recents"
                :key="article.slug"
                tag="li"
            >
                <h3>{{ article.title }}</h3>
                <p>{{ article.excerpt }}</p>
            </RouterLink>
        </ul>
    </div>
</template>

<script>
export default {
    //
};
</script>
