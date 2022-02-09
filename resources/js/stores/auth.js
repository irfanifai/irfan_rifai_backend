import $axios from "../api.js";

const state = () => ({
    data: JSON.parse(localStorage.getItem("auth")),

});

const mutations = {};

const actions = {
    submit({ commit }, payload) {
        localStorage.setItem("token", null); //RESET LOCAL STORAGE MENJADI NULL
        localStorage.setItem("auth", null); //RESET LOCAL STORAGE MENJADI NULL
        commit("SET_TOKEN", null, { root: true }); //RESET STATE TOKEN MENJADI NULL
        //KARENA MUTATIONS SET_TOKEN BERADA PADA ROOT STORES, MAKA DITAMBAHKAN PARAMETER
        //{ root: true }

        //KITA MENGGUNAKAN PROMISE AGAR FUNGSI SELANJUTNYA BERJALAN KETIKA FUNGSI INI SELESAI
        return new Promise((resolve, reject) => {
            //MENGIRIM REQUEST KE SERVER DENGAN URI /login
            //DAN PAYLOAD ADALAH DATA YANG DIKIRIMKAN DARI COMPONENT LOGIN.VUE
            $axios
                .post("/login", payload)
                .then(response => {
                    //KEMUDIAN JIKA RESPONNYA SUKSES
                    if (response.data.status == "success") {
                        //MAKA LOCAL STORAGE DAN STATE TOKEN AKAN DISET MENGGUNAKAN
                        //API DARI SERVER RESPONSE
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
                    //JANGAN LUPA UNTUK MELAKUKAN RESOLVE AGAR DIANGGAP SELESAI
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
    }
};

export default {
    namespaced: true,
    state,
    actions,
    mutations
};
