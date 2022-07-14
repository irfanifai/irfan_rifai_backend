<template>
    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <!-- Sign Up Section -->
                    <div class="bg-white">
                        <div class="content content-full">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <h1 class="h4  mb-1">
                                            Register
                                        </h1>
                                    </div>
                                    <!-- END Header -->

                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-name" name="signup-name" placeholder="Name" v-model="data.name">
                                            <p
                                                class="text-danger"
                                                v-if="errors.name"
                                            >
                                                {{ errors.name[0] }}
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-username" name="signup-username" placeholder="Username" v-model="data.username">
                                            <p
                                                class="text-danger"
                                                v-if="errors.username"
                                            >
                                                {{ errors.username[0] }}
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-lg form-control-alt" id="signup-email" name="signup-email" placeholder="Email" v-model="data.email">
                                            <p
                                                class="text-danger"
                                                v-if="errors.email"
                                            >
                                                {{ errors.email[0] }}
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password" name="signup-password" placeholder="Password" v-model="data.password">
                                            <p
                                                class="text-danger"
                                                v-if="errors.password"
                                            >
                                                {{ errors.password[0] }}
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="Password Confirm" v-model="data.password_confirmation">
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center mb-0">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-success" @click.prevent="postRegister">
                                                <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Sign Up Section -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
</template>

<script>
import { mapActions, mapMutations, mapGetters, mapState } from "vuex";
export default {
    data() {
        return {
            loadingPage: 0,
            data: {},
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

    },
    methods: {
        ...mapActions("auth", [
            "submit",
            "submitRegister",
        ]),
        ...mapMutations(["CLEAR_ERRORS"]),
        postRegister() {
            this.CLEAR_ERRORS();
            this.loadingPage = 1;
            this.submitRegister(this.data)
                .then(() => {
                    this.loadingPage = 0;
                })
                .catch(error => {
                    this.loadingPage = 0;
                });
        },
    }
};
</script>
