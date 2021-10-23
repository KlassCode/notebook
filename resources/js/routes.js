import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue';
import ListContactComponent from './pages/ListContactComponent.vue';

// import About from './pages/About.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/registerd',
            name: 'register',
            component: Register
        },
        {
            path: '/contactList',
            name: 'contactList',
            component: ListContactComponent
        },
    ]
});

export default router;
