const first = {template: '<div> <p>this is from first screen </p> </div>'}
const second = {template: '<div> <p>this is from second screen </p> </div>'}
const navbar = {template: httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>')}

const routes = [
    {path : '/first', component: first},
    {path : '/second', component: second},
    {path : '/navbar', component: navbar}
]
const router = new VueRouter({
    routes
})
const app = new Vue({
    router
}).$mount('#app')

