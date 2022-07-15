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
                    style="
                        background: url(../media/mager/background.png) no-repeat
                            center top;
                        background-size: cover;
                        min-height: 100vh;
                    "
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
                                style="border-radius: 15px !important;  border: 2px solid #BB3C26;"
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
                                    class="block-content"
                                >
                                    <div class="p-sm-3 pb-1">
                                        <h3 class="mb-2 text-black-75">
                                            Berhasil daftar, namun belum
                                            Verifikasi
                                        </h3>
                                        <p class="text-black-75 mb-0">
                                            Kamu perlu verifikasi email terlebih
                                            dahulu ke <b>{{this.data.email}}</b>
                                            sebelum bisa mengakses Mager, yuk
                                            verifikasi!
                                        </p>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="p-sm-3 pt-1">
                                        <p
                                            class="text-black-75 mb-1"
                                            v-if="resendTry <= 3"
                                        >
                                            Belum terima email ?
                                            <span
                                                class="text-muted"
                                                v-if="this.count > 0"
                                            >
                                                Tunggu {{ count }} detik sebelum
                                                kirim email kembali</span
                                            >
                                            <span
                                                class="
                                                    text-primary
                                                    font-w600
                                                    text-pointer
                                                "
                                                @click="resendVerifCode()"
                                                v-else
                                            >
                                                kirim ulang kode verifikasi
                                            </span>
                                        </p>
                                        <p class="text-black-75 mb-1" v-else>
                                            Kamu udah melebihi batas kirim ulang
                                            kode verifikasi, cek lagi email kamu
                                            apakah sudah sesuai atau tidak
                                        </p>
                                        <p>
                                            Sudah Verifikasi ?
                                            <router-link
                                                class="
                                                text-primary
                                                font-size-sm
                                            "
                                                :to="{
                                                    name: 'login'
                                                }"
                                                >Login Disini
                                            </router-link>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign Up Block -->
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="font-size-sm text-center text-muted py-3">
                        <strong>Mager </strong> &copy; Tripasysfo Development
                    </div>
                    <!-- END Footer -->
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
    created() {
        if (this.isAuth) {
            this.$router.push({ name: "home" });
        }
        if (this.$route.params.email) {
            this.data.email = this.$route.params.email;
            this.countDownTimer();
        } else {
            this.$router.push({ name: "login" });
        }
    },
    methods: {
        ...mapActions("auth", ["verifRegister", "resendVerifRegister"]),
        ...mapMutations(["CLEAR_ERRORS"]),
        //CountDown
        countDownTimer() {
            if (this.count > 0) {
                var counter = setTimeout(() => {
                    this.count -= 1;
                    this.countDownTimer();
                }, 1000);
            } else {
                clearTimeout(counter);
            }
        },
        resendVerifCode() {
            this.resendTry = this.resendTry + 1;
            if(this.resendTry <= 3 ){
                this.data.fromSource = 'registForm';
                this.count = 50;
                this.countDownTimer();
                this.resendVerifRegister(this.data)
                    .then(() => {
                        this.loadingPage = 0;
                        this.submitForm = 1;
                    })
                    .catch(error => {
                        this.loadingPage = 0;
                        error.response.status == 500
                            ? this.alert('Email tidak terdaftar', 2)
                            : "";
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
