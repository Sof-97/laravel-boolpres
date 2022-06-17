<template>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a @click="$emit(getPage, pagination.currentPage - 1)" class="page-link" href="#">Previous</a>
                </li>
                <li :class="(pagination.currentPage == page)? 'active' : '' " class="page-item" v-for="page in pagination.lastPage" :key="page"><a href="#" class="page-link">{{page}}</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "PageModule",
    props:{
        pagination: Object,
    }
};
</script>
