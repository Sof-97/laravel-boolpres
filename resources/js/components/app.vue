<template>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Registrati o completa il login.
                    </div>

                    <div class="card-body">
                        Questa è la pagina per gli ospiti.
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
export default {
    name: "App",
    mounted() {
        console.log("Apposteroni.");
    },
};
</script>
