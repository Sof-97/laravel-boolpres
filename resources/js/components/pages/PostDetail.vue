<template>
    <div class="container mt-3">
        <h2>Post view:</h2>
        <h2>Title: {{ post.title }}</h2>
        <img :src="post.image" alt="">
        <h6 class="my-3">Categories:</h6>
        <span class="badge badge-pill p-2" :class="`badge-${post.category.color}`">{{post.category.label}}</span>
        <h6 class="my-3">Tags:</h6>
        <span v-for="tag in post.tags" :key="tag.id" class="badge badge-pill p-2" :style="`background-color: ${tag.color}`">{{tag.label}}</span>
        <h6 class="my-3">Post content:</h6>
        <p>{{post.content}}</p>
    </div>
</template>

<script>
export default {
    name: "PostDetail",
    data() {
        return {
            post: [],
        };
    },
    methods: {
        getPost() {
            this.axios
                .get(
                    `http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`
                )
                .then((res) => {
                    this.post = res.data;
                });
        },
    },
    mounted() {
        this.getPost();
        
    },
};
</script>

<style lang="scss" scoped></style>
