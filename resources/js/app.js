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


Vue.mixin({
    methods: {
        alert(text, tipe) {
            if (tipe === 1) {
                this.$swal({
                    title: "Succes",
                    text: text,
                    icon: "success"
                });
            } else if (tipe === 2) {
                this.$swal({
                    title: "Something Wrong",
                    text: text,
                    icon: "error"
                });
            } else if (tipe === 3) {
                this.$swal({
                    title: "Are you sure ?",
                    text: text,
                    icon: "warning",
                    buttons: ["Cancel", "Delete"],
                    dangerMode: true
                }).then(willDelete => {
                    if (willDelete) {
                        this.alert("Data has been deleted !", 1);
                    }
                });
            } else if (tipe === 4) {
                this.$swal({
                    title: "Are you sure ?",
                    text: text,
                    icon: "warning",
                    buttons: ["Cancel", "Update"],
                    dangerMode: false
                }).then(willDelete => {
                    if (willDelete) {
                        this.alert("Data has been deleted !", 1);
                    }
                });
            }
        }
    }
});

new Vue({
    router,
    store,
    el: "#app",
    vuetify: new Vuetify(),
    render: h => h(App)
});
