import $axios from '../../api.js'

const state = () => ({
    users: [], //UNTUK MENAMPUNG DATA USERS YANG DIDAPATKAN DARI DATABASE
    
    //UNTUK MENAMPUNG VALUE DARI FORM INPUTAN NANTINYA
    //STATE INI AKAN DIGUNAKAN PADA FORM ADD USER YANG AKAN DIBAHAS KEMUDIAN
    user: {
        name: "",
        email: "",
        phone: "",
        password: "",
        retypepassword: "",
        photo:""
    },
    page: 1, //UNTUK MENCATAT PAGE PAGINATE YANG SEDANG DIAKSES
    rows: 20, //UNTUK MENCATAT DEFAULT ROWS DATA YANG TAMPIL
    last_page:1,
    search:''
})

const mutations = {
    //MEMASUKKAN DATA KE STATE USERS
    ASSIGN_DATA(state, payload) {
        state.users = payload
        state.last_page = payload.meta.last_page
        state.page = payload.meta.current_page
    },
    //MENGUBAH DATA STATE PAGE
    SET_PAGE(state, payload) {
        state.page = payload
    },
    //MENGUBAH DATA STATE USER
    ASSIGN_FORM(state, payload) {
        state.user = {
            name: payload.name,
            email: payload.email,
            username: payload.username,
            phone: payload.phone,
            password: payload.password,
            retypepassword: payload.retypepassword,
            photo: payload.photo
        }
    },
    //ME-RESET STATE USER MENJADI KOSONG
    CLEAR_FORM(state) {
        state.user = {
            name: "",
            username:"",
            email: "",
            phone: "",
            password: "",
            retypepassword: "",
            photo:""
        }
    },
    //ME-RESET STATE USER MENJADI KOSONG
    CLEAR_USERS(state) {
        state.users = []
    }
}

const actions = {
    //FUNGSI INI UNTUK MELAKUKAN REQUEST DATA USER DARI SERVER
    getUsers({ commit, state }, payload) {
        //MENGECEK PAYLOAD ADA ATAU TIDAK
        let search = typeof payload.search != 'undefined' ? payload.search:''
        let rows = payload.rows
        let page = typeof payload.rows != 'All' && payload.rowsUpdate != 1 ? state.page:'1'
        let sort = payload.sort
        let asc = payload.asc !=false ? "DESC" : "ASC"
        
        return new Promise((resolve, reject) => {
            //REQUEST DATA DENGAN ENDPOINT /USERS
            $axios.get(`/users?page=${page}&search=${search}&rows=${rows}&sort=${sort}&asc=${asc}`)
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
    submitUser({ dispatch, commit, state }) {
        return new Promise((resolve, reject) => {
            //MENGIRIMKAN PERMINTAAN KE SERVER DAN MELAMPIRKAN DATA YANG AKAN DISIMPAN
            //DARI STATE USER
            $axios.post(`/users`, state.user)
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
    //UNTUK MENGAMBIL SINGLE DATA DARI SERVER BERDASARKAN CODE USER
    editUser({ commit }, payload) {
        return new Promise((resolve, reject) => {
            //MELAKUKAN REQUEST DENGAN MENGIRIMKAN CODE USER DI URL
            $axios.get(`/users/${payload}/edit`)
            .then((response) => {
                //APABIL BERHASIL, DI ASSIGN KE FORM
                commit('ASSIGN_FORM', response.data.data)
                resolve(response.data)
            })
        })
    },
    //UNTUK MENGUPDATE DATA BERDASARKAN CODE YANG SEDANG DIEDIT
    updateUser({ state, commit }, payload) {
        return new Promise((resolve, reject) => {
            $axios.put(`/users/${payload}`, state.user)
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
    removeUser({commit }, payload) {
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