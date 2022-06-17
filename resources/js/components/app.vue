<template>
    <main>
        <div class="container">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <router-link class="navbar-brand" to="/">BoolStock</router-link>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link" to="/contacts">Contacts</router-link>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <router-view></router-view>
    </main>
</template>

<script>
import PostsList from './pages/PostList.vue';
export default {
    name: "App",
    mounted() {
        console.log("Apposteroni.");
    },
};
</script>