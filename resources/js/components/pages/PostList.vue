<template>
    <div class="container mt-3">
        <h2 v-if="isLoading">Caricando...</h2>
        <div v-if="posts.length > 0" class="row">
            <div
                :key="post.id"
                class="card-post position-relative"
                v-for="post in posts"
            >
                <img :src="post.image" :alt="post.title" />
                <h4>{{ post.title }}</h4>
                <p><strong>Descrizione:</strong>{{ post.content }}</p>
                <div v-if="post.category">
                    <strong>Categoria:</strong
                    ><span
                        class="badge badge-pill"
                        :class="`badge-${post.category.color}`"
                        >{{ post.category.label }}</span
                    >
                </div>
                <router-link
                    :to="{ name: 'PostDetail', params: { slug: post.slug } }"
                    class="btn btn-primary position-absolute"
                    >Visualizza</router-link
                >
            </div>
        </div>
        <h2 v-else>Non ci sono post.</h2>
        <page-module :pagination="pagination" @getPage="getPosts" />
    </div>
</template>

<script>
import PageModule from "./PageModule.vue";
export default {
    name: "PostList",
    components: {
        PageModule,
    },
    data() {
        return {
            isLoading: true,
            posts: [],
            pagination: {},
        };
    },
    methods: {
        getPosts(page = 1) {
            console.log("page:", page);
            if(page < 1){
                page = 1;
            } else if (page > this.pagination.lastPage){
                page = this.pagination.lastPage;
            }
            this.axios
                .get('http://127.0.0.1:8000/api/posts?page=' + page)
                .then((res) => {
                    const { data, current_page, last_page } = res.data;
                    this.posts = data;
                    this.pagination = {
                        currentPage: current_page,
                        lastPage: last_page,
                    };
                })
                .then((this.isLoading = false));
        },
    },
    mounted() {
        this.getPosts();
    },
};
</script>

<style lang="scss" scoped>
.card-post {
    width: calc(100% / 4 - 20px);
    margin: 2.5rem 10px;
    padding: 10px;
    border: 2px solid grey;
    border-radius: 20px;

    strong {
        margin-right: 10px;
    }

    img {
        width: calc(100% + 20px);
        position: relative;
        left: -10px;
        top: -10px;
        border-radius: 20px 20px 0 0;
    }

    a {
        right: -1px;
        bottom: -1px;
        border-end-end-radius: 20px;
    }
}
</style>
