
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./lightslider');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('about-section', require('./components/about.vue'));
Vue.component('summary-section', require('./components/summary.vue'));
Vue.component('contacts-section', require('./components/contacts.vue'));
Vue.component('skills-section', require('./components/skills.vue'));
Vue.component('expertise-section', require('./components/expertise.vue'));
Vue.component('footer-section', require('./components/footer.vue'));

const app = new Vue({
    el: '#homepage'
});
