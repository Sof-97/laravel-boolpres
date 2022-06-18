<template>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination" style="cursor: pointer">
                <li class="page-item" @click="$emit('getPage', pagination.currentPage - 1)">
                    <span class="page-link">Previous</span>
                </li>
                <li
                    :class="pagination.currentPage == page ? 'active' : ''"
                    class="page-item page-link"
                    v-for="page in pagination.lastPage"
                    :key="page"
                    @click="$emit('getPage', page)"
                >
                    {{ page }}
                </li>
                <li class="page-item" @click="$emit('getPage', pagination.currentPage + 1)">
                    <span class="page-link">Next</span>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "PageModule",
    props: {
        pagination: Object,
    },
};
</script>
