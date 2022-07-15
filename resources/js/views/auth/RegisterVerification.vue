<!-- HTML SECTION -->
<template>
    <!-- Page Content -->
    <div class="page-container">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static">
                <div
                    class="content"
                >
                    <div
                        class="row justify-content-center"
                        style="margin-top:10vh;"
                    >
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign Up Block -->
                            <div
                                class="
                                    block block-themed block-fx-shadow
                                    mb-0
                                    block-rounded block-mode-loading-oneui
                                "
                            >
                                <div
                                    class="block-header bg-white"
                                    style="
                                        border-top-left-radius: 15px;
                                        border-top-right-radius: 15px;
                                        margin-top: 20px;
                                    "
                                >
                                    <img
                                        class="m-auto"
                                        :src="
                                            '/media/mager/logo-mager-baru.png'
                                        "
                                        height="45px"
                                    />
                                </div>
                                <div
                                    class="block-content block-content-full pb-0"
                                    style="padding-bottom: 80px"
                                    v-if="verifStatus == 0"
                                >
                                    <div class="p-sm-3 px-lg-4">
                                        <grid-loader
                                            class="mx-auto"
                                            :color="'#BB3C26'"
                                            :size="'14px'"
                                        ></grid-loader>
                                        <center class="mt-2 mb-4">
                                            <span
                                                class="text-center"
                                                style="opacity:0.7; font-size:14px;"
                                                >Verifikasi Data</span
                                            >
                                        </center>

                                        <center>
                                            <p>
                                                Kami sedang verifikasi akun
                                                kamu, mohon tunggu sebentar ya
                                            </p>
                                        </center>
                                    </div>
                                </div>
                                <div
                                    class="block-content block-content-full pb-0"
                                    style="padding-bottom: 80px"
                                    v-else-if="verifStatus == 1"
                                >
                                    <div class="p-sm-3 px-lg-4">
                                        <center>
                                            <template
                                                v-if="
                                                    errors.verification &&
                                                        errors.code == 1
                                                "
                                            >
                                                <img
                                                    :src="
                                                        '../media/mager/access-denied.svg'
                                                    "
                                                    style="height: 180px; margin-bottom:20px"
                                                />
                                                <h5
                                                    class="text-danger mb-2 font-w700"
                                                    v-if="errors.verification"
                                                >
                                                    {{ errors.verification[0] }}
                                                </h5>
                                                <p class="text-black-75 mb-3">
                                                    Permintaan tidak dapat
                                                    dilanjutkan, dikarenakan
                                                    autentikasi tidak terpenuhi
                                                </p>
                                            </template>
                                            <template
                                                v-if="
                                                    errors.verification &&
                                                        errors.code == 2
                                                "
                                            >
                                                <img
                                                    :src="
                                                        '../media/mager/verify-complete.svg'
                                                    "
                                                    style="height: 180px; margin-bottom:20px"
                                                />
                                                <h5
                                                    class="text-danger mb-2 font-w700"
                                                    v-if="errors.verification"
                                                >
                                                    {{ errors.verification[0] }}
                                                </h5>
                                                <p class="text-black-75 mb-3">
                                                    Permintaan verifikasi
                                                    kadaluarsa, akun kamu sudah
                                                    terverifikasi silahkan
                                                    <router-link
                                                        class="
                                                            text-primary
                                                            font-size-sm
                                                        "
                                                        :to="{
                                                            name: 'login'
                                                        }"
                                                        >masuk ke akun kamu
                                                    </router-link>
                                                </p>
                                            </template>
                                            <template
                                                v-if="
                                                    errors.verification &&
                                                        errors.code == 3
                                                "
                                            >
                                                <img
                                                    :src="
                                                        '../media/mager/verify-complete.svg'
                                                    "
                                                    style="height: 180px; margin-bottom:20px"
                                                />
                                                <h5
                                                    class="text-danger mb-2 font-w700"
                                                    v-if="errors.verification"
                                                >
                                                    {{ errors.verification[0] }}
                                                </h5>
                                                <p class="text-black-75 mb-3">
                                                    Permintaan verifikasi
                                                    kadaluarsa, silahkan
                                                    <span
                                                        class="
                                                            text-primary
                                                            font-w600
                                                            text-pointer
                                                        "
                                                        @click="resendVerifCode()"
                                                    > kirim ulang kode verifikasi akun
                                                    </span>
                                                </p>
                                            </template>
                                        </center>
                                    </div>
                                </div>
                                <div class="block-content" v-else>
                                    <div class="p-sm-3 pb-1">
                                        <h3 class="mb-2 text-black-75">
                                            Verifikasi berhasil
                                        </h3>
                                        <p class="text-black-75 mb-0">
                                            Kamu akan diarahkan ke halaman login
                                            dalam hitungan {{ this.count }}
                                        </p>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="p-sm-3 pt-1">
                                        <p>
                                            Atau klik disini
                                            <router-link
                                                class="
                                                text-primary
                                                font-size-sm
                                            "
                                                :to="{
                                                    name: 'login'
                                                }"
                                                >Login
                                            </router-link>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign Up Block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Content -->
</template>

<!-- JAVASCRIPT SECTION -->
<script>
import { mapActions, mapMutations, mapGetters, mapState } from "vuex";
export default {
    data() {
        return {
            loadingPage: 0,
            verifStatus: 0,
            data: {},
            count: 30,
            resendTry: 0
        };
    },
    computed: {
        ...mapState(["errors"]),
        ...mapGetters(["isAuth"])
    },
    mounted() {
        if (this.isAuth) {
            this.$router.push({ name: "home" });
        }
        if (this.$route.query.a && this.$route.query.b) {
            this.data.a = this.$route.query.a;
            this.data.b = this.$route.query.b;
            this.verifRegister(this.data)
                .then(() => {
                    this.verifStatus = 2;
                    this.count = 5;
                    this.countDownTimer();
                    console.log("verified");
                })
                .catch(error => {
                    this.verifStatus = 1;
                    console.log("error count");
                });
        } else {
            this.$router.push({ name: "register" });
        }
    },
    methods: {
        ...mapActions("auth", ["verifRegister", "resendVerifRegister"]),
        ...mapMutations(["CLEAR_ERRORS"]),
        //CountDown
        countDownTimer() {
            if (this.count > 0) {
                setTimeout(() => {
                    this.count -= 1;
                    this.countDownTimer();
                }, 1000);
            } else {
                this.$router.push({ name: "login", params: { afterRegister: 1 } });
            }
        },
        resendVerifCode() {
            this.resendTry = this.resendTry + 1;
            if(this.resendTry <= 3 ){
                this.data.fromSource = 'registVerif';
                this.count = 50;
                this.countDownTimer();
                this.resendVerifRegister(this.data)
                    .then(() => {
                        this.loadingPage = 0;
                        this.submitForm = 1;
                    })
                    .catch(error => {
                        this.loadingPage = 0;
                    });
            }
        },
        // Show Hide Password
        hidePassword() {
            this.passwordHidden = true;
        },
        showPassword() {
            this.passwordHidden = false;
        },
        // Show Hide Password Confirmation
        hidePasswordConfirmation() {
            this.passwordConfirmationHidden = true;
        },
        showPasswordConfirmation() {
            this.passwordConfirmationHidden = false;
        }
    }
};
</script>
