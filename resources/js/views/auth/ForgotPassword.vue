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
                    <div class="row justify-content-center" style="margin-top:10vh;">
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
                                        margin-top: 50px;
                                    "
                                >

                                </div>
                                <div class="block-content" v-if="submitForm == 0">
                                    <div class="p-sm-3 px-lg-4">
                                        <h3 class="mb-2 text-black-75">
                                            Lupa Password
                                        </h3>
                                        <p class="text-black-75 mb-0">
                                            Masukan email kamu, dan kami akan mengirimkan email verifikasi untuk reset password kamu
                                        </p>

                                        <!-- Sign Up Form -->
                                        <form class="js-validation-signup">
                                            <div class="py-3">
                                                <div class="form-group">
                                                    <input
                                                        type="email"
                                                        class="
                                                            form-control
                                                            form-control-lg
                                                            form-control-alt
                                                        "
                                                        placeholder="Email"
                                                        v-model="data.email"
                                                        style="
                                                            border-color: #d5d5d5;
                                                        "
                                                        @keydown.space.prevent
                                                        :class="{
                                                            'is-invalid':
                                                                errors.email ||
                                                                errors.invalid
                                                        }"
                                                    />
                                                    <p
                                                        class="text-danger"
                                                        v-if="errors.email"
                                                    >
                                                        {{ errors.email[0] }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button
                                                        @click.prevent="
                                                            postForgetPassword
                                                        "
                                                        type="submit"
                                                        class="
                                                            btn
                                                            btn-sm
                                                            btn-block
                                                            btn-primary
                                                        "
                                                        v-if="loadingPage == 0"
                                                    >
                                                        <i
                                                            class="
                                                                fa fa-fw fa-link
                                                                mr-1
                                                            "
                                                        ></i>
                                                        Kirim Email
                                                    </button>
                                                    <div
                                                        class="
                                                            block-content
                                                            block-content-full
                                                            pb-0
                                                        "
                                                        v-else
                                                    >
                                                        <div
                                                            class="
                                                                spinner-border
                                                                spinner-border-lg
                                                                text-primary
                                                                mx-auto
                                                            "
                                                            role="status"
                                                            style="
                                                                display: flex;
                                                                justify-content: center;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="
                                                        col-12
                                                    "
                                                >
                                                    <span>
                                                        Ingat Password ?
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
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Sign Up Form -->
                                    </div>
                                </div>

                                <!-- MESSAGE TYPE 3  Success Send Reset Password-->
                                <div
                                    class="block-content"
                                    v-else
                                >
                                    <div class="p-sm-3 pb-1">
                                        <h3 class="mb-2 text-black-75">
                                            Cek email kamu
                                        </h3>
                                        <p class="text-black-75 mb-0">
                                            Permintaan reset password kamu telah dikirim ke <b> {{this.data.email}} </b> Ikuti intruksi yang dikirimkan untuk reset password kamu
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
                                                @click="resendResetLink()"
                                                v-else
                                            >
                                                kirim ulang link reset password
                                            </span>
                                        </p>
                                        <p>
                                            Sudah reset password ?
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
            submitForm: 0,
            data:{},
            count: 30,
            resendTry: 0
        };
    },
    computed: {
        ...mapState(["errors"]),
        ...mapGetters(["isAuth"])
    },
    methods: {
        ...mapActions("auth", ["submitForgetPassword","resendForgetPassword"]),
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
        postForgetPassword() {
            this.CLEAR_ERRORS();
            this.loadingPage = 1;
            this.submitForgetPassword(this.data)
                .then(() => {
                    this.loadingPage = 0;
                    this.submitForm = 1;
                    this.countDownTimer();
                })
                .catch(error => {
                    this.loadingPage = 0;
                });
        },
        resendResetLink() {
            this.resendTry = this.resendTry + 1;
            if(this.resendTry <= 3 ){
                this.data.fromSource = 'forgetPasswordForm';
                this.count = 50;
                this.countDownTimer();
                this.resendForgetPassword(this.data)
                    .then(() => {
                        this.loadingPage = 0;
                        this.submitForm = 1;
                    })
                    .catch(error => {
                        this.loadingPage = 0;
                    });
            }
        },
    }
};
</script>
