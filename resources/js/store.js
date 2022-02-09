import Vue from "vue";
import Vuex from "vuex";

import auth from "./stores/auth.js";
import dashboard from "./stores/admin/dashboard.js";
import user from "./stores/admin/user.js";
import news from "./stores/admin/news.js";

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        auth,
        dashboard,
        user,
        news,
    },

    state: {
        token: localStorage.getItem("token"),
        errors: []
    },

    getters: {
        isAuth: state => {
            return state.token != "null" && state.token != null;
        }
    },

    mutations: {
        SET_TOKEN(state, payload) {
            state.token = payload;
        },
        SET_AUTH(state, payload) {
            state.auth.data = payload;
        },
        SET_ERRORS(state, payload) {
            state.errors = payload;
        },
        CLEAR_ERRORS(state) {
            state.errors = [];
        }
    }
});

export default store;
