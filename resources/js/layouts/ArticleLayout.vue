<template>
    <div class="flex flex-wrap md:flex-no-wrap w-full max-w-5xl mx-auto">
        <div class="w-full pt-8 md:p-8 md:fixed md:block flex justify-center">
            <RouterLink
                class="bg-red-200 px-4 py-2"
                :to="{ name: 'BlogController@HomePage' }">
                All Articles
            </RouterLink>
        </div>

        <div class="w-full md:w-2/3 p-8 mx-auto">
            <slot />
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style>
</style>
