import $axios from '../../api.js'

const state = () => ({
    newsAll: [],
    
    news: {
        news_title: "",
        news_content: "",
    },
    page: 1, //UNTUK MENCATAT PAGE PAGINATE YANG SEDANG DIAKSES
    rows: 20, //UNTUK MENCATAT DEFAULT ROWS DATA YANG TAMPIL
    last_page:1,
    search:''
})

const mutations = {
    //MEMASUKKAN DATA KE STATE NEWS
    ASSIGN_DATA(state, payload) {
        state.newsAll = payload
        state.last_page = payload.meta.last_page
        state.page = payload.meta.current_page
    },
    //MENGUBAH DATA STATE PAGE
    SET_PAGE(state, payload) {
        state.page = payload
    },
    //MENGUBAH DATA STATE NEWS
    ASSIGN_FORM(state, payload) {
        state.news = {
            news_title: payload.news_title,
            news_content: payload.news_content,
        }
    },
    //ME-RESET STATE NEWS MENJADI KOSONG
    CLEAR_FORM(state) {
        state.news = {
            news_title: "",
            news_content:"",
        }
    },
    //ME-RESET STATE NEWS MENJADI KOSONG
    CLEAR_NEWSALL(state) {
        state.newsAll = []
    }
}

const actions = {
    //FUNGSI INI UNTUK MELAKUKAN REQUEST DATA NEWS DARI SERVER
    getNews({ commit, state }, payload) {
        //MENGECEK PAYLOAD ADA ATAU TIDAK
        let search = typeof payload.search != 'undefined' ? payload.search:''
        let rows = payload.rows
        let page = typeof payload.rows != 'All' && payload.rowsUpdate != 1 ? state.page:'1'
        let sort = payload.sort
        let asc = payload.asc !=false ? "DESC" : "ASC"
        
        return new Promise((resolve, reject) => {
            //REQUEST DATA DENGAN ENDPOINT /NEWS
            $axios.get(`/news?page=${page}&search=${search}&rows=${rows}&sort=${sort}&asc=${asc}`)
            .then((response) => {
                //SIMPAN DATA KE STATE MELALUI MUTATIONS
                commit('ASSIGN_DATA', response.data)
                resolve(response.data)
            })
            .catch((error) => {
                console.log(error);
            })
        })
    },
    //FUNGSI UNTUK MENAMBAHKAN DATA BARU
    submitNews({ dispatch, commit, state }) {
        return new Promise((resolve, reject) => {
            //MENGIRIMKAN PERMINTAAN KE SERVER DAN MELAMPIRKAN DATA YANG AKAN DISIMPAN
            //DARI STATE NEWS
            $axios.post(`/news`, state.news)
            .then((response) => {
                resolve(response.data)
            })
            .catch((error) => {
                //APABILA TERJADI ERROR VALIDASI
                //DIMANA LARAVEL MENGGUNAKAN CODE 422
                if (error.response.status === 422) {
                    //MAKA LIST ERROR AKAN DIASSIGN KE STATE ERRORS
                    commit('SET_ERRORS', error.response.data.errors, { root: true })
                }
            })
        })
    },
    //UNTUK MENGAMBIL SINGLE DATA DARI SERVER BERDASARKAN CODE NEWS
    editNews({ commit }, payload) {
        return new Promise((resolve, reject) => {
            //MELAKUKAN REQUEST DENGAN MENGIRIMKAN CODE NEWS DI URL
            $axios.get(`/news/${payload}/edit`)
            .then((response) => {
                //APABIL BERHASIL, DI ASSIGN KE FORM
                commit('ASSIGN_FORM', response.data.data)
                resolve(response.data)
            })
        })
    },
    //UNTUK MENGUPDATE DATA BERDASARKAN CODE YANG SEDANG DIEDIT
    updateNews({ state, commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.put(`/news/${payload}`, state.news)
            .then((response) => {
                //FORM DIBERSIHKAN
                commit('CLEAR_FORM')
                resolve(response.data)
            })
            .catch((error) => {
                //APABILA TERJADI ERROR VALIDASI
                //DIMANA LARAVEL MENGGUNAKAN CODE 422
                if (error.response.status === 422) {
                    //MAKA LIST ERROR AKAN DIASSIGN KE STATE ERRORS
                    commit('SET_ERRORS', error.response.data.errors, { root: true })
                }
            })
        })
    } ,
    //MENGHAPUS DATA 
    removeNews({commit }, payload) {
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