import $axios from '../../api.js'

const state = () => ({
    users: [],
    user: {
        name: "",
        email: "",
        phone: "",
        password: "",
        retypepassword: "",
        photo: ""
    },
    page: 1,
    rows: 20,
    last_page: 1,
    search: ''
})

const mutations = {
    ASSIGN_DATA(state, payload) {
        state.users = payload
        state.last_page = payload.meta.last_page
        state.page = payload.meta.current_page
    },
    SET_PAGE(state, payload) {
        state.page = payload
    },
    ASSIGN_FORM(state, payload) {
        state.user = {
            name: payload.user.name,
            email: payload.user.email,
            username: payload.user.username,
            phone: payload.user.phone,
            password: payload.user.password,
            retypepassword: payload.user.retypepassword,
            photo: payload.user.photo
        }
    },
    CLEAR_FORM(state) {
        state.user = {
            name: "",
            username: "",
            email: "",
            phone: "",
            password: "",
            retypepassword: "",
            photo: ""
        }
    },
    CLEAR_USERS(state) {
        state.users = []
    }
}

const actions = {
    getUsers({ commit, state }, payload) {
        let search = typeof payload.search != 'undefined' ? payload.search : ''
        let rows = payload.rows
        let page = typeof payload.rows != 'All' && payload.rowsUpdate != 1 ? state.page : '1'
        let sort = payload.sort
        let asc = payload.asc != false ? "DESC" : "ASC"

        return new Promise((resolve, reject) => {
            $axios.get(`/users?page=${page}&search=${search}&rows=${rows}&sort=${sort}&asc=${asc}`)
                .then((response) => {
                    commit('ASSIGN_DATA', response.data)
                    resolve(response.data)
                })
                .catch((error) => {
                    console.log(error);
                })
        })
    },
    // submitUser({ dispatch, commit, state }) {
    //     return new Promise((resolve, reject) => {
    //         $axios.post(`/users`, state.user)
    //             .then((response) => {
    //                 resolve(response.data)
    //             })
    //             .catch((error) => {
    //                 if (error.response.status === 422) {
    //                     commit('SET_ERRORS', error.response.data.errors, { root: true })
    //                 }
    //             })
    //     })
    // },
    submitUser({ dispatch, commit, state }) {
        return new Promise((resolve, reject) => {
            $axios
                .post(`/users`, state.user)
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
    editUser({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.get(`/users/${payload}/edit`)
                .then((response) => {
                    commit('ASSIGN_FORM', response.data.data)
                    resolve(response.data)
                })
        })
    },
    updateUser({ state, commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.put(`/users/${payload}`, state.user)
                .then((response) => {
                    commit('CLEAR_FORM')
                    resolve(response.data)
                })
                .catch((error) => {
                    if (error.response.status === 422) {
                        commit('SET_ERRORS', error.response.data.errors, { root: true })
                    }
                })
        })
    },
    removeUser({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.delete(`/users/${payload}`)
                .then((response) => {
                    commit('CLEAR_FORM')
                    resolve(response.data)
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error);
                    }
                })
        })
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations
}
