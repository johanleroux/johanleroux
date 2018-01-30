require('./bootstrap');

window.Vue = require('vue');

import InstantSearch from 'vue-instantsearch';
Vue.use(InstantSearch);

import VueMoment from 'vue-moment';
Vue.use(VueMoment);

import VueObserveVisibility from 'vue-observe-visibility'
Vue.use(VueObserveVisibility)

Vue.component('ais-event-wrapper', require('./components/AisEventWrapper.vue'));
Vue.component('tips-create', require('./components/Tips/Create.vue'));
Vue.component('tips-index', require('./components/Tips/Index.vue'));

const app = new Vue({
    el: '#app',
});

