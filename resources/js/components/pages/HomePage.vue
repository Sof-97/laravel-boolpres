<template>
    <div>
        <h2>HomePage</h2>
        <PostList></PostList>
    </div>
</template>

<script>
import PostList from './PostList.vue';

export default {
    name:"HomePage",
    component:{
        PostList
    }
}
</script>

<style lang="scss" scoped>

</style>