<!-- HTML SECTION -->
<template>
    <div class="page-container">
        <!-- Page Content -->
        <div class="hero-static d-flex align-items-center">
            <div class="w-100">
                <!-- Sign In Section -->
                <div class="bg-white">
                    <div class="content content-full">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                <!-- Header -->
                                <div class="text-center">
                                    <h1 class="h4 mb-1">
                                        Sign In
                                    </h1>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <form class="js-validation-signin">
                                    <div class="py-3">
                                        <div class="form-group has-feedback">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-alt"
                                                placeholder="Username"
                                                v-model="data.username"
                                                style="border-color: #d5d5d5;"
                                                @keydown.space.prevent
                                                :class="{
                                                    'is-invalid':
                                                        errors.username ||
                                                        errors.invalid
                                                }"
                                            />
                                            <span
                                                class="glyphicon glyphicon-envelope form-control-feedback"
                                            ></span>
                                            <p
                                                class="text-danger"
                                                v-if="errors.username"
                                            >
                                                {{ errors.username[0] }}
                                            </p>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input
                                                type="password"
                                                class="form-control form-control-lg form-control-alt"
                                                placeholder="Password"
                                                v-model="data.password"
                                                style="border-color: #d5d5d5;"
                                                :class="{
                                                    'is-invalid':
                                                        errors.password ||
                                                        errors.invalid
                                                }"
                                            />
                                            <span
                                                class="glyphicon glyphicon-lock form-control-feedback"
                                            ></span>
                                            <p
                                                class="text-danger"
                                                v-if="errors.password"
                                            >
                                                {{ errors.password[0] }}
                                            </p>
                                        </div>
                                        <p
                                            class="text-danger"
                                            v-if="errors.invalid"
                                        >
                                            {{ errors.invalid }}
                                        </p>
                                    </div>
                                    <div
                                        class="form-group row justify-content-center mb-0"
                                    >
                                        <div class="col-md-6 col-xl-5">
                                            <button
                                                type="submit"
                                                @click.prevent="postLogin"
                                                class="btn btn-block btn-primary"
                                                v-if="
                                                    !loadingPage ||
                                                        errors.password ||
                                                        errors.username ||
                                                        errors.invalid
                                                "
                                            >
                                                <i
                                                    class="fa fa-fw fa-sign-in-alt mr-1"
                                                ></i>
                                                Sign In
                                            </button>
                                            <div
                                                class="block-content block-content-full pb-0"
                                                v-else
                                            >
                                                <div
                                                    class="spinner-border spinner-border-lg text-info mx-auto"
                                                    role="status"
                                                    style="display: flex;
                                                    justify-content: center;"
                                                ></div>
                                            </div>
                                        </div>


                                    </div>
                                    <div
                                        class="form-group row justify-content-center mb-0"
                                    >
                                        <div class="col-md-12 col-xl-5">
                                            <router-link
                                                class="
                                                    text-primary
                                                    font-size-sm
                                                "
                                                :to="{
                                                    name: 'register'
                                                }"
                                                >Register
                                            </router-link>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Sign In Section -->

                <!-- Footer -->
                <div class="font-size-sm text-center text-muted py-3">
                    <strong>irfanrifai.com</strong>
                    &copy;
                    <span data-toggle="year-copy">2022</span>
                </div>
                <!-- END Footer -->
            </div>
        </div>
        <!-- END Page Content -->
    </div>
</template>

<script>
import { mapActions, mapMutations, mapGetters, mapState } from "vuex";
export default {
    data() {
        return {
            loadingPage: 0,
            data: {
                username: "",
                password: "",
                remember_me: false
            }
        };
    },
    created() {
        if (this.isAuth) {
            this.$router.push({ name: "home" });
        }
    },
    computed: {
        ...mapGetters(["isAuth"]),
        ...mapState(["errors"])
    },
    methods: {
        ...mapActions("auth", ["submit"]),
        ...mapMutations(["CLEAR_ERRORS"]),
        postLogin() {
            this.loadingPage = 1;
            this.submit(this.data).then(() => {
                if (this.isAuth) {
                    this.CLEAR_ERRORS();
                    this.$router.push({ name: "home" });
                }
            });
        }
    }
};
</script>
