import VueRouter from 'vue-router';

const PaginaInicial = () => import('../views/PaginaInicial.vue');

const routes = [
    { path: '/', component: PaginaInicial }
];

export default new VueRouter({
    mode: 'history',
    routes
});