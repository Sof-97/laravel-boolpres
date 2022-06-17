window.Vue = require('vue');


import Vue from 'vue';
import App from './components/App.vue';
import Axios from 'axios';
import router from './routes';

Vue.prototype.axios = Axios;

const root = new Vue({
    el: '#root',
    router,
    render: h => h(App)
});