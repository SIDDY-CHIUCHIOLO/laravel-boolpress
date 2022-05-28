<template>
    <div class="row  justify-content-center">
        <Post v-for="(post, index) in posts" :key="index" :post='post'/>
    </div>
</template>

<script>
import Post from './Post.vue';
export default {
    name: 'PostList',
    components: {
        Post,
    },
    data: function(){
        return{
            posts: [],
        }
    },
    methods:{
        getPosts(page){
            axios.get(`http://localhost:8000/api/posts?page=${page}`)
                .then((result)=>{
                    console.log(result.data.data);
                    this.posts = result.data.data;
                })
                .catch( (error) => {
                    console.warn(error);
                });
        }
    },
    mounted(){
        this.getPosts();
    }
}
</script>

<style>

</style>