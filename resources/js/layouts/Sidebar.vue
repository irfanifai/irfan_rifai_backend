<template>
<nav id="sidebar" aria-label="Main Navigation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
            <!-- Logo -->
            <router-link class="font-w600 text-dual" :to="{ name: 'home' }">
                <i
                    class="fab fa-think-peaks text-primary"
                    style="font-size: 25px; padding-right:5px;"
                ></i>
                <span class="smini-hide">
                    <span class="font-w700 font-size-h5">Aurora App</span>
                    <span class="font-w400">1.0</span>
                </span>
            </router-link>
            <!-- END Logo -->

                    <!-- Extra -->
                    <div>

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
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
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </router-link>
                            <router-link
                                class="nav-main-link d-none d-lg-inline-block"
                                :to="{ name: 'home' }"
                                exact
                            >
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </router-link>
                        </li>

                        <!-------------------------ADMIN--------------------------------------->

                        <!--Administrator-->
                        <li class="nav-main-heading" v-if="auth.data.admin">Administrator</li>
                        <li class="nav-main-item" v-if="auth.data.admin">
                            <router-link
                                class="nav-main-link d-lg-none"
                                :to="{ name: 'user' }"
                                data-toggle="layout"
                                data-action="sidebar_toggle"
                            >
                                <i class="nav-main-link-icon far fa-user"></i>
                                <span class="nav-main-link-name">User</span>
                            </router-link>
                            <router-link
                                class="nav-main-link d-none d-lg-inline-block"
                                :to="{ name: 'user' }"
                            >
                                <i class="nav-main-link-icon far fa-user"></i>
                                <span class="nav-main-link-name">User</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item" v-if="auth.data.admin">
                            <router-link
                                class="nav-main-link d-lg-none"
                                :to="{ name: 'news' }"
                                data-toggle="layout"
                                data-action="sidebar_toggle"
                            >
                                <i class="nav-main-link-icon far fa-newspaper"></i>
                                <span class="nav-main-link-name">News</span>
                            </router-link>
                            <router-link
                                class="nav-main-link d-none d-lg-inline-block"
                                :to="{ name: 'news' }"
                            >
                                <i class="nav-main-link-icon far fa-newspaper"></i>
                                <span class="nav-main-link-name">News</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item" v-if="auth.data.admin">
                            <router-link
                                class="nav-main-link d-lg-none"
                                :to="{ name: 'signature' }"
                                data-toggle="layout"
                                data-action="sidebar_toggle"
                            >
                                <i class="nav-main-link-icon fa fa-signature"></i>
                                <span class="nav-main-link-name">Signature List</span>
                            </router-link>
                            <router-link
                                class="nav-main-link d-none d-lg-inline-block"
                                :to="{ name: 'signature' }"
                            >
                                <i class="nav-main-link-icon fa fa-signature"></i>
                                <span class="nav-main-link-name">Signature List</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item" v-if="auth.data.admin">
                            <router-link
                                class="nav-main-link d-lg-none"
                                :to="{ name: 'bank' }"
                                data-toggle="layout"
                                data-action="sidebar_toggle"
                            >
                                <i class="nav-main-link-icon far fa-money-bill-alt"></i>
                                <span class="nav-main-link-name">Bank Account</span>
                            </router-link>
                            <router-link
                                class="nav-main-link d-none d-lg-inline-block"
                                :to="{ name: 'bank' }"
                            >
                                <i class="nav-main-link-icon far fa-money-bill-alt"></i>
                                <span class="nav-main-link-name">Bank Account</span>
                            </router-link>
                        </li>

                        <!-------------------------ACCOUNTING--------------------------------------->

                        <!--Accounting-->
                        <li class="nav-main-heading">Accounting</li>
                        <li class="nav-main-item">
                            <a
                                class="nav-main-link nav-main-link-submenu"
                                data-toggle="submenu"
                                aria-haspopup="true"
                                aria-expanded="false"
                                href="#"
                            >
                                <i class="nav-main-link-icon far fa-list-alt"></i>
                                <span class="nav-main-link-name">Accounts</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Chart of Accounts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Linked Accounts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a
                                class="nav-main-link nav-main-link-submenu"
                                data-toggle="submenu"
                                aria-haspopup="true"
                                aria-expanded="false"
                                href="#"
                            >
                                <i class="nav-main-link-icon fa fa-book"></i>
                                <span class="nav-main-link-name">Journals</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Record Journal Entry</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Transaction Journal</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Recurring Journal</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a
                                class="nav-main-link nav-main-link-submenu"
                                data-toggle="submenu"
                                aria-haspopup="true"
                                aria-expanded="false"
                                href="#"
                            >
                                <i class="nav-main-link-icon fa fa-file-invoice-dollar"></i>
                                <span class="nav-main-link-name">Bills</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Bill Register</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Enter Bill</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Receive Payment</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a
                                class="nav-main-link nav-main-link-submenu"
                                data-toggle="submenu"
                                aria-haspopup="true"
                                aria-expanded="false"
                                href="#"
                            >
                                <i class="nav-main-link-icon fa fa-cogs"></i>
                                <span class="nav-main-link-name">Setup</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Customer Data</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Tax Data</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a
                                class="nav-main-link nav-main-link-submenu"
                                data-toggle="submenu"
                                aria-haspopup="true"
                                aria-expanded="false"
                                href="#"
                            >
                                <i class="nav-main-link-icon fa fa-print"></i>
                                <span class="nav-main-link-name">Report</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">General Ledger</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Trial Balance</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Balance Sheet</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Profit & Loss</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon si si-refresh"></i>
                                <span class="nav-main-link-name">Start a New Year</span>
                            </router-link>
                        </li>

                        <!-------------------------TR----------------------------------------->

                        <!--TRO-->
                        <li class="nav-main-heading">Tenant Relation Officer</li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon far fa-building"></i>
                                <span class="nav-main-link-name">Unit</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                <span class="nav-main-link-name">Unit Partition</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item">
                            <router-link
                                class="nav-main-link nav-main-link-submenu"
                                data-toggle="submenu"
                                :to="{ name: 'news' }"
                            >
                                <i class="nav-main-link-icon far fa-id-card"></i>
                                <span class="nav-main-link-name">Tenant</span>
                            </router-link>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Tenant</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Tenant : Owner</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Tenant : Leaseholder</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon fa fa-clipboard"></i>
                                <span class="nav-main-link-name">Department Jobdesk</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon fa fa-boxes"></i>
                                <span class="nav-main-link-name">Item In/Out permit</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon fa fa-archive"></i>
                                <span class="nav-main-link-name">Fitout</span>
                            </router-link>
                        </li>

                        <!--Customer Service-->
                        <li class="nav-main-heading">Customer Service</li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon far fa-file-alt"></i>
                                <span class="nav-main-link-name">Request</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon fa fa-briefcase"></i>
                                <span class="nav-main-link-name">Work Order</span>
                            </router-link>
                        </li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon far fa-envelope-open"></i>
                                <span class="nav-main-link-name">Suggestion</span>
                            </router-link>
                        </li>

                        <!--Receptionist-->
                        <li class="nav-main-heading">Receptionist</li>
                        <li class="nav-main-item">
                            <router-link class="nav-main-link" :to="{ name: 'news' }">
                                <i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">Receptionist</span>
                            </router-link>
                        </li>

                        <!-------------------------GA----------------------------------------->

                        <!--Storekeeper-->
                        <!-- <li class="nav-main-heading">Storekeeper</li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">UOM</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Category</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Items</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Items</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Items In</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Items Out</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Items Demand</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Stock Opname</span>
                        </router-link>
                        </li>-->

                        <!--PO-->
                        <!-- <li class="nav-main-heading">Purchase Order</li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">P.O List</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">P.O Approval</span>
                        </router-link>
                    </li>
                    <li class="nav-main-item">
                        <router-link class="nav-main-link" :to="{ name: 'home' }" >
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">P.O Acceptance</span>
                        </router-link>
                        </li>-->

                        <!--Logout-->
                        <li class="nav-main-heading"></li>
                        <li class="nav-main-item">
                            <button class="nav-main-link" @click="logout()">
                                <i class="nav-main-link-icon fa fa-power-off"></i>
                                <span class="nav-main-link-name" style="flex: unset">Logout</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 733px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 679px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></nav>
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
                this.$store.commit('user/CLEAR_USERS')
                this.$router.push("/login"); //REDIRECT KE PAGE LOGIN
            });
        },
    }
};
</script>
