<template>
    <div class="card mb-3 col-5 me-3">
        <div class="row">
            <div class="col-md-4">
            <img :src="post.image_url" class="img-fluid rounded-start" :alt="post.title">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{post.title}}</h5>
                <p class="card-text">{{post.content}}</p>
                <p class="card-text"><small class="text-muted">{{post.author}}</small></p>
                <p class="card-text"><small class="text-muted">{{post.created_at}}</small></p>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'IndexPost',
    props: ['post'],
}
</script>

<style>

</style>