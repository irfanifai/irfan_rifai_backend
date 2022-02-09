// import "./bootstrap";
import Vue from "vue";
import router from "./router";
import store from "./store.js";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import VueSwal from "vue-swal";
import CKEditor from '@ckeditor/ckeditor5-vue';

import App from "./layouts/App.vue";

import "../../public/css/oneui.css";
import "../../public/css/aurora.css";
import "../../public/css/themes/modern.min.css";

Vue.use(Vuetify);
Vue.use(VueSwal);
Vue.use(require('vue-moment'));
var VueTruncate = require('vue-truncate-filter')
Vue.use(VueTruncate)
Vue.use( CKEditor );

import Paginate from 'vuejs-paginate'
Vue.component('paginate', Paginate)

// window.axios = axios;

new Vue({
    router,
    store,
    el: "#app",
    vuetify: new Vuetify(),
    render: h => h(App)
});
