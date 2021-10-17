import Vue from "vue";
import VueRouter from "vue-router";

import Book from '../views/admin/pages/book/Book.vue'
Vue.use(VueRouter);

const routes = [{
        path: "/",
        name: "Home",
        component: require("../views/admin/pages/HomePage.vue").default,
    },
    {
        path: "/book",
        name: "Book",
        component: Book,
    },
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

export default router;