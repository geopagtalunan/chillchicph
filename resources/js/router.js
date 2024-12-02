import { createRouter, createWebHistory } from "vue-router";

const Home = () => import('../js/components/pages/Home.vue');
const Dashboard = () => import('../js/components/pages/Dashboard.vue');
const Products = () => import('../js/components/pages/Products.vue');
const Inventory = () => import('../js/components/pages/Inventory.vue');
const StockOutflow = () => import('./components/pages/StockOutflow.vue');
const StockInflow = () => import('./components/pages/StockInflow.vue');
const Customer = () => import('./components/pages/Customer.vue');


const router = createRouter({
    history: createWebHistory('InventorySystem'),
    base: 'InventorySystem',
    routes:[
        {
            path: '/Home',
            component: Home,
            name: 'Home'
        },
        {
            path: '/Dashboard',
            component: Dashboard,
            name: 'Dashboard'
        },
        {
            path: '/Products',
            component: Products,
            name: 'Products'
        },
        {
            path: '/Inventory',
            component: Inventory,
            name: 'Inventory'
        },
        {
            path: '/StockOutflow',
            component: StockOutflow,
            name: 'StockOutlfow'
        },
        {
            path: '/StockInflow',
            component: StockInflow,
            name: 'StockInflow'
        },
        {
            path: '/Customer',
            component: Customer,
            name: 'Customer'
        },
    ]
})

export default router;