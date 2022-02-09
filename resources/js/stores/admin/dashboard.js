import $axios from "../../api.js";

const state = () => ({
    dashboard: [],

});

const mutations = {
    ASSIGN_COUNT_DATA(state, payload) {
        state.dashboard = payload;
    },

};

const actions = {
    getCountData({ dispatch, commit, state }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .get(`/dashboard`)
                .then(response => {
                    commit("ASSIGN_COUNT_DATA", response.data);
                    resolve(response.data);
                })
                .catch(error => {
                    error.response.status === 401
                        ? dispatch("DO_LOGOUT", null, { root: true })
                        : "";
                    reject(error);
                });
        });
    },

};

export default {
    namespaced: true,
    state,
    actions,
    mutations
};
