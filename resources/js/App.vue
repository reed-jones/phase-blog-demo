<template>
<div id="app">
    <component :is="layout">
        <RouterView />
    </component>
</div>
</template>

<script>
import MainLayout from './layouts/MainLayout'
import ArticleLayout from './layouts/ArticleLayout'

export default {
    components: {
        MainLayout,
        ArticleLayout
    },
    computed: {
        /**
         * Here we will use a simple lookup table to
         * select the persistent layout based on out
         * current route
         */
        layout() {
            return {
                'BlogController@HomePage': "MainLayout",
                'BlogController@AboutPage': "MainLayout",
                'BlogController@ContactPage': "MainLayout",
                'BlogController@SingleArticle': "ArticleLayout"
            }[this.$route.name]
        }
    }
}
</script>
