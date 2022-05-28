<template>
    <div class="container">
        <h1 class="text-center fw-bold m-4">Posts List</h1>
        <PostList/>
    </div>
</template>

<script>
import PostList from "../components/PostList.vue";

export default {
    name: 'App',
    components: {
        PostList,
    },
}
</script>

<style>

</style>