import Vue from 'vue';
import VueRouter from 'vue-router';
import HomePage from './components/pages/HomePage';
import ContactPage from './components/pages/ContactPage';
import NotFoundPage from './components/pages/NotFoundPage';
import PostDetail from './components/pages/PostDetail.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {   path: '/', component: HomePage  },
        {   path:'/contacts', component: ContactPage},
        {   path: '/posts/:id', component: PostDetail, name: 'post-detail'},
        {   path: '*', component: NotFoundPage}
    ]
});

export default router;