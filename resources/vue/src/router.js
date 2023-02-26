import {createRouter, createWebHistory} from 'vue-router'
import TheHomePage from "./views/TheHomePage.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    scrollBehavior(to, from, savedPosition) {
        return {top: 0}
    },
    routes: [
        {
            path: '/',
            name: 'home',
            component: TheHomePage
        },
    ]
})

export default router
