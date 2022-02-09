<template>
    <nav id="sidebar" aria-label="Main Navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div
                        class="simplebar-content-wrapper"
                        style="height: 100%; overflow: hidden scroll;"
                    >
                        <div class="simplebar-content" style="padding: 0px;">
                            <!-- Side Header -->
                            <div class="content-header bg-white-5">
                                <!-- Logo -->
                                <router-link
                                    class="font-w600 text-dual"
                                    :to="{ name: 'home' }"
                                >
                                    <i
                                        class="fab fa-think-peaks text-primary"
                                        style="font-size: 25px; padding-right:5px;"
                                    ></i>
                                    <span class="smini-hide">
                                        <span class="font-w700 font-size-h5"
                                            >Wafa</span
                                        >
                                    </span>
                                </router-link>
                                <!-- END Logo -->

                                <!-- Extra -->
                                <div>
                                    <!-- Close Sidebar, Visible only on mobile screens -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a
                                        class="d-lg-none btn btn-sm btn-dual ml-2"
                                        data-toggle="layout"
                                        data-action="sidebar_close"
                                        href="javascript:void(0)"
                                    >
                                        <i class="fa fa-fw fa-times"></i>
                                    </a>
                                    <!-- END Close Sidebar -->
                                </div>
                                <!-- END Extra -->
                            </div>
                            <!-- END Side Header -->

                            <!-- Side Navigation -->
                            <div class="content-side content-side-full">
                                <ul class="nav-main">
                                    <!--Dashboard-->
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link d-lg-none"
                                            :to="{ name: 'home' }"
                                            data-toggle="layout"
                                            data-action="sidebar_toggle"
                                            exact
                                        >
                                            <i
                                                class="nav-main-link-icon si si-speedometer"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Dashboard</span
                                            >
                                        </router-link>
                                        <router-link
                                            class="nav-main-link d-none d-lg-inline-block"
                                            :to="{ name: 'home' }"
                                            exact
                                        >
                                            <i
                                                class="nav-main-link-icon si si-speedometer"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Dashboard</span
                                            >
                                        </router-link>
                                    </li>

                                    <!--Administrator-->
                                    <li class="nav-main-heading">
                                        Administrator
                                    </li>
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link d-lg-none"
                                            :to="{ name: 'user' }"
                                            data-toggle="layout"
                                            data-action="sidebar_toggle"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-user"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >User</span
                                            >
                                        </router-link>
                                        <router-link
                                            class="nav-main-link d-none d-lg-inline-block"
                                            :to="{ name: 'user' }"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-user"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >User</span
                                            >
                                        </router-link>
                                    </li>
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link d-lg-none"
                                            :to="{ name: 'news' }"
                                            data-toggle="layout"
                                            data-action="sidebar_toggle"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-newspaper"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >News</span
                                            >
                                        </router-link>
                                        <router-link
                                            class="nav-main-link d-none d-lg-inline-block"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-newspaper"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >News</span
                                            >
                                        </router-link>
                                    </li>

                                    <!--Artikel-->
                                    <li class="nav-main-heading">
                                        Artikel
                                    </li>
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-file-alt"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Semua Artikel</span
                                            >
                                        </router-link>
                                    </li>
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-envelope-open"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Buat Artikel</span
                                            >
                                        </router-link>
                                    </li>
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon  fa fa-briefcase"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Kategori Artikel</span
                                            >
                                        </router-link>
                                    </li>

                                    <li class="nav-main-heading"></li>
                                    <!--Tentang Kami-->
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon fas fa-info"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Tentang Kami</span
                                            >
                                        </router-link>
                                    </li>
                                    <!--Pesan-->
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon far fa-comment-alt"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Pesan</span
                                            >
                                        </router-link>
                                    </li>
                                    <!--Pengaturan Footer-->
                                    <li class="nav-main-item">
                                        <router-link
                                            class="nav-main-link"
                                            :to="{ name: 'news' }"
                                        >
                                            <i
                                                class="nav-main-link-icon fas fa-cog"
                                            ></i>
                                            <span class="nav-main-link-name"
                                                >Pengaturan Footer</span
                                            >
                                        </router-link>
                                    </li>

                                    <!--Logout-->
                                    <li class="nav-main-heading"></li>
                                    <li class="nav-main-item">
                                        <button
                                            class="nav-main-link"
                                            @click="logout()"
                                        >
                                            <i
                                                class="nav-main-link-icon fa fa-power-off"
                                            ></i>
                                            <span
                                                class="nav-main-link-name"
                                                style="flex: unset"
                                                >Logout</span
                                            >
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Side Navigation -->
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="simplebar-placeholder"
                style="width: auto; height: 733px;"
            ></div>
        </div>
        <div
            class="simplebar-track simplebar-horizontal"
            style="visibility: hidden;"
        >
            <div
                class="simplebar-scrollbar"
                style="width: 0px; display: none;"
            ></div>
        </div>
        <div
            class="simplebar-track simplebar-vertical"
            style="visibility: visible;"
        >
            <div
                class="simplebar-scrollbar"
                style="height: 679px; transform: translate3d(0px, 0px, 0px); display: block;"
            ></div>
        </div>
    </nav>
</template>

<script>
import "../../../public/css/oneui.css";
import "../../../public/css/aurora.css";
import "../../../public/css/themes/modern.min.css";

import { mapState, mapMutations } from "vuex";

export default {
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
