import Vue from "vue";
import VueRouter from "vue-router";
import store from "./store.js";

//PAGE
import Home from "./views/Home.vue";
import Login from "./views/Login.vue";
//USER
import User from "./views/admin/user/User.vue";
import UserCreate from "./views/admin/user/Create.vue";
import UserEdit from "./views/admin/user/Edit.vue";
//NEWS
import News from "./views/admin/news/News.vue";
import NewsCreate from "./views/admin/news/Create.vue";
import NewsEdit from "./views/admin/news/Edit.vue";
//CATEGORY ARTICLE
import Category from "./views/admin/category/Category.vue";
import CategoryCreate from "./views/admin/category/Create.vue";
import CategoryEdit from "./views/admin/category/Edit.vue";
//ABOUT US
import About from "./views/admin/about/About.vue";
// import AboutCreate from "./views/admin/about/Create.vue";
import AboutEdit from "./views/admin/about/Edit.vue";
//INFO
import Info from "./views/admin/info/Info.vue";
// import InfoCreate from "./views/admin/info/Create.vue";
import InfoEdit from "./views/admin/info/Edit.vue";


Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
            meta: { requiresAuth: true }
        },
        {
            path: "/login",
            name: "login",
            component: Login
        },
        {
            path: "/user",
            name: "user",
            component: User,
            meta: { requiresAuth: true }
        },
        {
            path: "/user/create",
            name: "user-create",
            component: UserCreate,
            meta: { requiresAuth: true }
        },
        {
            path: "/user/edit",
            name: "user-edit",
            component: UserEdit,
            meta: { requiresAuth: true }
        },
        {
            path: "/news",
            name: "news",
            component: News,
            meta: { requiresAuth: true }
        },
        {
            path: "/news/create",
            name: "news-create",
            component: NewsCreate,
            meta: { requiresAuth: true }
        },
        {
            path: "/news/edit",
            name: "news-edit",
            component: NewsEdit,
            meta: { requiresAuth: true }
        },
        {
            path: "/category",
            name: "category",
            component: Category,
            meta: { requiresAuth: true }
        },
        {
            path: "/category/create",
            name: "category-create",
            component: CategoryCreate,
            meta: { requiresAuth: true }
        },
        {
            path: "/category/edit",
            name: "category-edit",
            component: CategoryEdit,
            meta: { requiresAuth: true }
        },
        {
            path: "/about",
            name: "about",
            component: About,
            meta: { requiresAuth: true }
        },
        {
            path: "/about/edit",
            name: "about-edit",
            component: AboutEdit,
            meta: { requiresAuth: true }
        },
        {
            path: "/info",
            name: "info",
            component: Info,
            meta: { requiresAuth: true }
        },
        {
            path: "/info/edit",
            name: "info-edit",
            component: InfoEdit,
            meta: { requiresAuth: true }
        },
    ]
});

//Navigation Guards
router.beforeEach((to, from, next) => {
    store.commit('CLEAR_ERRORS')
    if (to.matched.some(record => record.meta.requiresAuth)) {
        let auth = store.getters.isAuth;
        if (!auth) {
            next({ name: "login" });
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;
