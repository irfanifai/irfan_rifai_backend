// import "./bootstrap";
import Vue from "vue";
import router from "./router";
import store from "./store.js";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import VueSwal from "vue-swal";
import CKEditor from '@ckeditor/ckeditor5-vue';
import GridLoader from "vue-spinner/src/GridLoader.vue";
import Paginate from 'vuejs-paginate'

import App from "./layouts/App.vue";

import "../../public/css/oneui.css";
import "../../public/css/aurora.css";
import "../../public/css/themes/modern.min.css";

Vue.use(Vuetify);
Vue.use(VueSwal);
Vue.use(require('vue-moment'));
Vue.use(CKEditor);

Vue.component('paginate', Paginate)
Vue.component("grid-loader", GridLoader);

new Vue({
    router,
    store,
    el: "#app",
    vuetify: new Vuetify(),
    render: h => h(App)
});
