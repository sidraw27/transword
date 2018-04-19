
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from "vue";

Vue.prototype.$http = axios;
window.Vue = Vue;

/**
 * If you need, open it
 */
// import nProgress from "nprogress";
// import 'nprogress/nprogress.css';
// window.NProgress = nProgress;
// NProgress.configure({ parent: 'body' });
// window.NProgress.start();
// window.NProgress.done();
// window.addEventListener('beforeunload', function() {
//     window.NProgress.start();
// });