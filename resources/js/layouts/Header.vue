<template>
    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button
                    type="button"
                    class="btn btn-sm btn-dual mr-2 d-lg-none"
                    data-toggle="layout"
                    data-action="sidebar_toggle"
                >
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Toggle Mini Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button
                    type="button"
                    class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block"
                    data-toggle="layout"
                    data-action="sidebar_mini_toggle"
                >
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Mini Sidebar -->

                <!-- Search Form (visible on larger screens) -->
                <span class="d-inline-block d-md-none mb-1">
                    {{ new Date() | moment("ddd, MMM Do YYYY") }}
                </span>
                <span
                    class="d-none d-sm-inline-block font-weight-bold ml-2 mb-1"
                >
                    {{ new Date() | moment("dddd, MMMM Do YYYY") }}
                </span>
                <!-- END Search Form -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button
                        type="button"
                        class="btn btn-sm btn-dual"
                        id="page-header-user-dropdown"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        <img
                            class="rounded"
                            :src="'/storage/avatar/' + auth.data.photo"
                            alt="Header Avatar"
                            style="width: 20px; height: 20px; object-fit: cover;border-radius:50% !important;"
                        />
                        <span class="d-none d-sm-inline-block ml-1">{{
                            auth.data.name
                        }}</span>
                        <i
                            class="fa fa-fw fa-angle-down d-none d-sm-inline-block"
                        ></i>
                    </button>
                    <div
                        class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm"
                        aria-labelledby="page-header-user-dropdown"
                    >
                        <div class="p-3 text-center bg-dark">
                            <img
                                class="img-avatar img-avatar50 img-avatar-thumb"
                                :src="'/storage/avatar/' + auth.data.photo"
                                style="object-fit: cover;"
                            />
                        </div>
                        <div class="p-2">
                            <h5 class="dropdown-header text-uppercase">
                                User Options
                            </h5>
                            <a
                                class="dropdown-item d-flex align-items-center justify-content-between"
                                @click="logout()"
                                style="cursor: pointer;"
                            >
                                <span>Log Out</span>
                                <i class="si si-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form
                    class="w-100"
                    action="be_pages_generic_search.html"
                    method="POST"
                >
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button
                                type="button"
                                class="btn btn-danger"
                                data-toggle="layout"
                                data-action="header_search_off"
                            >
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search or hit ESC.."
                            id="page-header-search-input"
                            name="page-header-search-input"
                        />
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->
</template>
<script>
import { mapState, mapMutations } from "vuex";

export default {
    data() {
        return {};
    },
    computed: {
        ...mapState(["auth"])
    },
    methods: {
        //KETIKA TOMBOL LOGOUT DITEKAN, FUNGSI INI DIJALANKAN
        ...mapMutations(["CLEAR_USERS"]),
        logout() {
            return new Promise((resolve, reject) => {
                localStorage.removeItem("token"); //MENGHAPUS TOKEN DARI LOCALSTORAGE
                localStorage.removeItem("auth"); //MENGHAPUS auth DARI LOCALSTORAGE
                resolve();
            }).then(() => {
                //MEMPERBAHARUI STATE TOKEN
                this.$store.state.token = localStorage.getItem("token");
                this.$store.state.authuser = localStorage.getItem("auth");
                this.$store.commit("user/CLEAR_USERS");
                this.$router.push("/login"); //REDIRECT KE PAGE LOGIN
            });
        }
    }
};
</script>
