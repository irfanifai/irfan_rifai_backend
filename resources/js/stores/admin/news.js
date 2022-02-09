import $axios from '../../api.js'

const state = () => ({
    newsAll: [],
    news: {
        news_title: "",
        news_content: "",
        photo: ""
    },
    page: 1,
    rows: 20,
    last_page: 1,
    search: ''
})

const mutations = {
    ASSIGN_DATA(state, payload) {
        state.newsAll = payload
        state.last_page = payload.meta.last_page
        state.page = payload.meta.current_page
    },
    SET_PAGE(state, payload) {
        state.page = payload
    },
    ASSIGN_FORM(state, payload) {
        state.news = {
            news_title: payload.news_title,
            news_content: payload.news_content,
            photo: payload.photo,
        }
    },
    CLEAR_FORM(state) {
        state.news = {
            news_title: "",
            news_content: "",
            photo: ""
        }
    },
    CLEAR_NEWSALL(state) {
        state.newsAll = []
    }
}

const actions = {
    getNews({ commit, state }, payload) {
        let search = typeof payload.search != 'undefined' ? payload.search : ''
        let rows = payload.rows
        let page = typeof payload.rows != 'All' && payload.rowsUpdate != 1 ? state.page : '1'
        let sort = payload.sort
        let asc = payload.asc != false ? "DESC" : "ASC"

        return new Promise((resolve, reject) => {
            $axios.get(`/news?page=${page}&search=${search}&rows=${rows}&sort=${sort}&asc=${asc}`)
                .then((response) => {
                    commit('ASSIGN_DATA', response.data)
                    resolve(response.data)
                })
                .catch((error) => {
                    console.log(error);
                })
        })
    },
    submitNews({ dispatch, commit, state }) {
        return new Promise((resolve, reject) => {
            $axios.post(`/news`, state.news)
                .then((response) => {
                    resolve(response.data)
                })
                .catch((error) => {
                    if (error.response.status === 422) {
                        commit('SET_ERRORS', error.response.data.errors, { root: true })
                    }
                })
        })
    },
    editNews({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.get(`/news/${payload}/edit`)
                .then((response) => {
                    commit('ASSIGN_FORM', response.data.data)
                    resolve(response.data)
                })
        })
    },
    updateNews({ state, commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.put(`/news/${payload}`, state.news)
                .then((response) => {
                    //FORM DIBERSIHKAN
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
    removeNews({ commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.delete(`/news/${payload}`)
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
