<template>
    <header class="container-fluid bg-dark mb-5">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand fs-2 text-danger">Boolpress</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="d-flex justify-content-between w-100">
                                <ul class="navbar-nav w-25 d-flex justify-content-around">
                                    <li class="nav-item">
                                        <router-link :to="{ name: 'home'}">
                                            <a class="nav-link active" aria-current="page">Home</a>
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{ name: 'posts'}">
                                            <a class="nav-link">Posts</a>
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{ name: 'contact'}">
                                            <a class="nav-link">Contacts</a>
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{ name: 'about-us'}">
                                            <a class="nav-link">About</a>
                                        </router-link>
                                    </li>
                                </ul>
                                <ul class="navbar-nav w-50">
                                    <li class="nav-item ms-auto">
                                        <a class="nav-link active" href="/admin">
                                            Login
                                        </a>
                                    </li>
                                    <li  class="nav-item">
                                        <a class="nav-link" href="/admin/posts" role="button">
                                            Posts-Admin
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: 'HeaderIndex'
}
</script>

<style lang="scss" scoped>
    header{
        a,li{
            color: white;
            font-weight: bold;
            text-decoration: none;
        }
    }
</style>>
