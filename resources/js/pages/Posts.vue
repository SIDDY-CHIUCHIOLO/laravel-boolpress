<template>
    <div class="row  justify-content-center">
        <Post v-for="(post, index) in posts" :key="index" :post='post'/>
        <div class="col-12">
            <nav class="my-3 d-flex justify-content-center" aria-label="Page navigation">
                <ul class="pagination">

                    <li class="page-item" v-if="pagination.currentPage > 1"
                    @click="getPosts(pagination.currentPage - 1)">
                        <a type="submit" class="page-link" >Previous</a>
                    </li>

                    <li class="page-item">
                        <a type="submit" class="page-link" >{{pagination.currentPage}}</a>
                    </li>

                    <li class="page-item" v-if="pagination.currentPage < pagination.lastPage"
                    @click="getPosts(pagination.currentPage + 1)">
                        <a type="submit" class="page-link" >Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
import Post from '../components/Post.vue'

export default {
    name: 'PostListIndex',
    components: {
        Post,
    },
    data: function(){
        return{
            posts: [],
            pagination:{},
        }
    },
    methods:{
        getPosts(page){
            axios.get(`http://localhost:8000/api/posts?page=${page}`)
                .then((result)=>{
                    console.log(result.data.data);
                    this.posts = result.data.data;
                    const { current_page, last_page } = result.data;
                    this.pagination = { currentPage : current_page, lastPage : last_page};
                })
                .catch( (error) => {
                    console.warn(error);
                });
        }
    },
    mounted(){
        this.getPosts(1);
    }
}
</script>

<style>

</style>