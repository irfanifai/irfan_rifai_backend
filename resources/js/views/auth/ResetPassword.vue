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
                            <!-- Reset Password Block -->
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
                                                >Mengambil Data</span
                                            >
                                        </center>

                                        <center>
                                            <p>
                                                Kami sedang verifikasi
                                                permintaan perubahan kata sandi
                                                dari kamu, mohon tunggu sebentar
                                                ya
                                            </p>
                                        </center>
                                    </div>
                                </div>
                                <template v-if="verifStatus == 1">
                                    <div
                                        class="block-content block-content-full pb-0"
                                        style="padding-bottom: 80px"
                                        v-if="errors.verification"
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
                                                        class="mt-1"
                                                        :src="
                                                            '../media/mager/access-denied.svg'
                                                        "
                                                        style="height: 180px; margin-bottom:20px"
                                                    />
                                                    <h5
                                                        class="text-danger mb-3 font-w700"
                                                        v-if="
                                                            errors.verification
                                                        "
                                                    >
                                                        {{
                                                            errors
                                                                .verification[0]
                                                        }}
                                                    </h5>
                                                    <p
                                                        class="text-black-75 mb-3"
                                                    >
                                                        Permintaan tidak dapat
                                                        dilanjutkan, dikarenakan
                                                        permintaan atur ulang
                                                        password kamu telah
                                                        kadaluarsa, silahkan
                                                        <router-link
                                                            class="
                                                                    text-primary
                                                                    font-size-sm
                                                                "
                                                            :to="{
                                                                name: 'login'
                                                            }"
                                                            >kembali ke halaman
                                                            Login
                                                        </router-link>
                                                    </p>
                                                </template>
                                            </center>
                                        </div>
                                    </div>
                                    <template v-else>
                                        <div
                                            class="block-content"
                                            v-if="submitForm == 0"
                                        >
                                            <div class="p-sm-3 px-lg-4">
                                                <h3 class="mb-2 text-black-75">
                                                    Buat Password Baru
                                                </h3>
                                                <p class="text-black-75 mb-0">
                                                    Masukan Password baru Kamu,
                                                    pastikan passwordnya belum
                                                    pernah digunakan ya
                                                </p>

                                                <!-- Reset Password Form -->
                                                <form
                                                    class="js-validation-signup"
                                                >
                                                    <div class="py-3">
                                                        <!-- Password -->
                                                        <div
                                                            class="form-group"
                                                            v-if="
                                                                !passwordHidden
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control form-control-lg form-control-alt d-inline"
                                                                placeholder="Password Baru"
                                                                v-model="
                                                                    data.password
                                                                "
                                                                style="border-color: #d5d5d5; margin-right: -45px; padding-right: 35px;"
                                                                :class="{
                                                                    'is-invalid':
                                                                        errors.password ||
                                                                        errors.invalid
                                                                }"
                                                                autocomplete="off"
                                                            />
                                                            <span
                                                                class="display-eye fa fa-eye-slash"
                                                                @click="
                                                                    hidePassword
                                                                "
                                                            ></span>
                                                            <p
                                                                class="text-danger"
                                                                v-if="
                                                                    errors.password
                                                                "
                                                            >
                                                                {{
                                                                    errors
                                                                        .password[0]
                                                                }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="form-group"
                                                            v-if="
                                                                passwordHidden
                                                            "
                                                        >
                                                            <input
                                                                type="password"
                                                                class="form-control form-control-lg form-control-alt d-inline"
                                                                placeholder="Password Baru"
                                                                v-model="
                                                                    data.password
                                                                "
                                                                style="border-color: #d5d5d5; margin-right: -45px; padding-right: 35px;"
                                                                :class="{
                                                                    'is-invalid':
                                                                        errors.password ||
                                                                        errors.invalid
                                                                }"
                                                                autocomplete="off"
                                                            />
                                                            <span
                                                                class="display-eye fa fa-eye"
                                                                @click="
                                                                    showPassword
                                                                "
                                                            ></span>
                                                            <p
                                                                class="text-danger"
                                                                v-if="
                                                                    errors.password
                                                                "
                                                            >
                                                                {{
                                                                    errors
                                                                        .password[0]
                                                                }}
                                                            </p>
                                                        </div>

                                                        <!-- Password Confirmation -->
                                                        <div
                                                            class="form-group"
                                                            v-if="
                                                                !passwordConfirmationHidden
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control form-control-lg form-control-alt d-inline"
                                                                placeholder="Konfirmasi Password Baru"
                                                                v-model="
                                                                    data.password_confirmation
                                                                "
                                                                style="border-color: #d5d5d5; margin-right: -45px; padding-right: 35px"
                                                                :class="{
                                                                    'is-invalid':
                                                                        errors.password_confirmation ||
                                                                        errors.invalid
                                                                }"
                                                                autocomplete="off"
                                                            />
                                                            <span
                                                                class="display-eye fa fa-eye-slash"
                                                                @click="
                                                                    hidePasswordConfirmation
                                                                "
                                                            ></span>
                                                        </div>
                                                        <div
                                                            class="form-group"
                                                            v-if="
                                                                passwordConfirmationHidden
                                                            "
                                                        >
                                                            <input
                                                                type="password"
                                                                class="form-control form-control-lg form-control-alt d-inline"
                                                                placeholder="Konfirmasi Password Baru"
                                                                v-model="
                                                                    data.password_confirmation
                                                                "
                                                                style="border-color: #d5d5d5; margin-right: -45px; padding-right: 35px"
                                                                :class="{
                                                                    'is-invalid':
                                                                        errors.password_confirmation ||
                                                                        errors.invalid
                                                                }"
                                                                autocomplete="off"
                                                            />
                                                            <span
                                                                class="display-eye fa fa-eye"
                                                                @click="
                                                                    showPasswordConfirmation
                                                                "
                                                            ></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <button
                                                                @click.prevent="
                                                                    postResetPassword
                                                                "
                                                                type="submit"
                                                                class="
                                                                btn
                                                                btn-sm
                                                                btn-block
                                                                btn-primary
                                                            "
                                                                v-if="
                                                                    loadingPage ==
                                                                        0
                                                                "
                                                            >
                                                                <i
                                                                    class="
                                                                    fa fa-fw fa-key
                                                                    mr-1
                                                                "
                                                                ></i>
                                                                Ubah Password
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
                                                    </div>
                                                </form>
                                                <!-- END Reset Password Form -->
                                            </div>
                                        </div>
                                        <div class="block-content" v-else>
                                            <div class="p-sm-3 px-lg-4">
                                                <center>
                                                    <img
                                                        :src="
                                                            '../media/mager/verify-complete.svg'
                                                        "
                                                        style="height: 180px; margin-bottom:20px"
                                                    />
                                                    <h5
                                                        class="text-danger mb-2 font-w700"
                                                    >
                                                        Password Berhasil Diubah
                                                    </h5>
                                                    <p class="text-black-75 mb-3">
                                                        Password kamu sudah berhasil
                                                        diubah, silahkan
                                                        <router-link
                                                            class="
                                                                text-primary
                                                                font-size-sm
                                                                "
                                                            :to="{
                                                                name: 'login'
                                                            }"
                                                            >kembali ke halaman Login
                                                        </router-link>
                                                    </p>
                                                </center>
                                            </div>
                                        </div>
                                    </template>
                                </template>
                            </div>
                            <!-- END Reset Password Block -->
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
            verifStatus: 0,
            passwordHidden: {
                default: false,
                type: Boolean
            },
            passwordConfirmationHidden: {
                default: false,
                type: Boolean
            },
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
            this.verifResetPassword(this.data)
                .then(response => {
                    this.verifStatus = 1;
                    this.count = 5;
                    this.countDownTimer();
                    console.log("verified");
                })
                .catch(error => {
                    this.verifStatus = 1;
                    console.log("error count");
                });
        } else {
            this.$router.push({ name: "login" });
        }
    },
    methods: {
        ...mapActions("auth", ["submitResetPassword", "verifResetPassword"]),
        ...mapMutations(["CLEAR_ERRORS"]),
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
        postResetPassword() {
            this.CLEAR_ERRORS();
            this.loadingPage = 1;
            this.count = 30;
            this.submitResetPassword(this.data)
                .then(() => {
                    this.loadingPage = 0;
                    this.submitForm = 1;
                    this.countDownTimer();
                })
                .catch(error => {
                    this.loadingPage = 0;
                });
        },
        resendVerifCode() {
            this.resendTry = this.resendTry + 1;
            if (this.resendTry <= 3) {
                this.data.fromSource = "registForm";
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
