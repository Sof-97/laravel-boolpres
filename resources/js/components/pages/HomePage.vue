<template>
    <div>
        <h2 class="container mt-3">HomePage</h2>
        <PostList></PostList>
    </div>
</template>

<script>
import PostList from './PostList.vue';

export default {
    name:"HomePage",
    components:{
        PostList
    }
}
</script>

<style lang="scss" scoped>

</style>