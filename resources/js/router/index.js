import { createRouter, createWebHistory } from 'vue-router'
import FlowBuilder from '../pages/Flow.vue';
const routes = [
    { path: '/flows/create', component: FlowBuilder },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router