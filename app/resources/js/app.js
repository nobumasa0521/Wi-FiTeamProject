/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//vuetify
import Vuetify from 'vuetify';
Vue.use(Vuetify);

import Vue from 'vue'
import VueRouter from 'vue-router';

window.Vue = Vue;
Vue.use(VueRouter);

import router from './router' // 追加 1.
// import App from './App.vue' // 追加 2.


axios.defaults.withCredentials = true; 

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('target-component', require('./components/TargetComponent.vue').default);
Vue.component('client-select-component', require('./components/ClientSelectComponent.vue').default);
Vue.component('top-bar-component', require('./components/TopBarComponent.vue').default);
Vue.component('main-component', require('./components/MainComponent.vue').default);
Vue.component('route-component', require('./components/RouteComponent.vue').default);
Vue.component('downloadroute-component', require('./components/DownloadRouteComponent.vue').default);
Vue.component('download-component', require('./components/DownloadComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    // component: {App},
    // template: '<App />',
    vuetify: new Vuetify({
        iconfont: 'mdi', //追記
    })
});
