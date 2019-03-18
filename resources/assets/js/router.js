import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

export default new VueRouter({
    saveScrollPosition: true,
    routes: [
        {
            name:"index",
            path:'/abcd',
            component: resolve =>void(require(['./components/ExampleComponent.vue'], resolve))
        },
    ]
})
