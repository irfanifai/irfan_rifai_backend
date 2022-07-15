import $axios from "../api.js";

const state = () => ({
    data: JSON.parse(localStorage.getItem("auth")),

});

const mutations = {};

const actions = {
    submit({ commit }, payload) {
        localStorage.setItem("token", null);
        localStorage.setItem("auth", null);
        commit("SET_TOKEN", null, { root: true });
        return new Promise((resolve, reject) => {
            $axios
                .post("/login", payload)
                .then(response => {
                    if (response.data.status == "success") {

                        localStorage.setItem("token", response.data.token);
                        commit("SET_TOKEN", response.data.token, {
                            root: true
                        });
                        localStorage.setItem(
                            "auth",
                            JSON.stringify(response.data.data)
                        );
                        commit("SET_AUTH", response.data.data, {
                            root: true
                        });
                    } else {
                        commit(
                            "SET_ERRORS",
                            { invalid: "These credentials do not match our records" },
                            { root: true }
                        );
                    }
                    resolve(response.data);
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    submitRegister({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post(`/register`, payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status === 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    verifRegister({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post(`/register/verification`, payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status === 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    resendVerifRegister({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post(`/register/resend-verification`, payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status === 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    submitForgetPassword({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post("/forgot-password", payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status == 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    resendForgetPassword({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post(`/forgot-password/resend-link`, payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status === 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    submitResetPassword({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post("/reset-password", payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status == 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
                });
        });
    },
    verifResetPassword({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios
                .post(`/reset-password/verification`, payload)
                .then(response => {
                    resolve(response.data);
                })
                .catch(error => {
                    reject(error);
                    if (error.response.status === 422) {
                        commit("SET_ERRORS", error.response.data.errors, {
                            root: true
                        });
                    }
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
