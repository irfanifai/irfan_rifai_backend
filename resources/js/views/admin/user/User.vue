<template>
    <main>
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div
                    class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center"
                >
                    <h1 class="flex-sm-fill h3 my-2">Administrator : User</h1>
                    <nav
                        class="flex-sm-00-auto ml-sm-3"
                        aria-label="breadcrumb"
                    >
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <router-link
                                    class="link-fx"
                                    :to="{ name: 'home' }"
                                    >Dashboard</router-link
                                >
                            </li>
                            <li class="breadcrumb-item">User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!--Loading-->
            <div
                class="block"
                v-if="loadingPage || !users.data"
                style="height:200px"
            >
                <div
                    class="block-content block-content-full pb-0"
                    style="padding-top: 80px"
                >
                    <div
                        class="spinner-border spinner-border-lg text-info mx-auto"
                        role="status"
                        style="display: flex;
                        justify-content: center;"
                    ></div>
                    <center class="mt-2">
                        <span class="text-center" style="opacity:0.7"
                            >Loading</span
                        >
                    </center>
                </div>
            </div>
            <!-- Dynamic Table Full -->
            <div class="block" v-else>
                <div class="block-content block-content-full pb-0 pt-3">
                    <div class="row">
                        <div
                            class="col-12 col-md-4 col-lg-4 col-xl-6 mb-2 mb-sm-0 pb-0"
                        >
                            <label>Show :</label>
                            <select
                                class="form-control-sm custom-select"
                                style="max-width:115px"
                                v-model="rows"
                            >
                                <option value="10">10 Rows</option>
                                <option value="20">20 Rows</option>
                                <option value="50">50 Rows</option>
                                <option value="100">100 Rows</option>
                                <option value="All">All Rows</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 col-xl-6 pb-0">
                            <input
                                type="text"
                                class="form-control col-12 col-md-6 float-right ml-1 mb-2"
                                name="example-text-input"
                                placeholder="Search.."
                                v-model="search"
                            />

                            <router-link
                                type="button"
                                class="btn btn-sm btn-info float-right m-1"
                                :to="{ name: 'user-create' }"
                                tag="button"
                                v-ripple="{ center: true }"
                            >
                                <i class="fa fa-plus mr-1"></i> Add Data
                            </router-link>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table
                            class="table table-bordered table-vcenter table-hover"
                        >
                            <thead style="background-color: whitesmoke;">
                                <tr>
                                    <th
                                        class="table-header-relative text-center"
                                        style="width: 80px;"
                                    >
                                        No.
                                    </th>
                                    <th
                                        class="table-header-relative sort-head"
                                        @click="sortBy('name')"
                                    >
                                        Name
                                        <i
                                            class="fa fa-sort sort-icon"
                                            v-bind:class="{
                                                active: sort == 'name'
                                            }"
                                        ></i>
                                    </th>
                                    <th
                                        class="table-header-relative sort-head"
                                        @click="sortBy('username')"
                                    >
                                        Username
                                        <i
                                            class="fa fa-sort sort-icon"
                                            v-bind:class="{
                                                active: sort == 'username'
                                            }"
                                        ></i>
                                    </th>
                                    <th
                                        class="table-header-relative sort-head"
                                        @click="sortBy('email')"
                                    >
                                        Email
                                        <i
                                            class="fa fa-sort sort-icon"
                                            v-bind:class="{
                                                active: sort == 'email'
                                            }"
                                        ></i>
                                    </th>

                                    <th
                                        class="table-header-relative sort-head"
                                        @click="sortBy('updated_at')"
                                        style="width: 15%;"
                                    >
                                        Last Updated
                                        <i
                                            class="fa fa-sort sort-icon"
                                            v-bind:class="{
                                                active: sort == 'updated_at'
                                            }"
                                        ></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody v-if="users.data && users.data.length > 0">
                                <router-link
                                    :to="{
                                        name: 'user-edit',
                                        params: {
                                            name: user.name,
                                            username: user.username
                                        }
                                    }"
                                    tag="tr"
                                    v-for="(user, index) in users.data"
                                    :key="index"
                                >
                                    <td class="text-center font-size-sm">
                                        {{ index + 1 }}
                                    </td>
                                    <td class="font-size-sm">
                                        {{ user.name }}
                                    </td>
                                    <td class="font-size-sm">
                                        {{ user.username }}
                                    </td>
                                    <td class="font-size-sm">
                                        {{ user.email }}
                                    </td>
                                    <td>
                                        <em
                                            class="text-muted font-size-sm"
                                            v-if="user.updated_at != null"
                                        >
                                            {{
                                                user.updated_at
                                                    | moment(
                                                        "HH:MM DD-MM-YYYY "
                                                    )
                                            }}
                                        </em>
                                        <em
                                            class="text-muted font-size-sm"
                                            v-else
                                        >
                                            -
                                        </em>
                                    </td>
                                </router-link>
                            </tbody>
                            <tbody v-else>
                                <tr class="data-empty">
                                    <td
                                        class="text-center"
                                        colspan="6"
                                        style="opacity:0.8; padding:2.5rem;"
                                    >
                                        <i class="fa fa-search fa-1x"></i>
                                        <br />
                                        Data Not Found
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            class="text-muted font-size-sm d-inline d-sm-none"
                            style="opacity:0.5;"
                        >
                            Swipe left here to see full column >>
                        </p>
                    </div>

                    <paginate
                        v-model="page"
                        :page-count="this.$store.state.user.last_page"
                        :prev-text="'Prev'"
                        :next-text="'Next'"
                        :container-class="'pagination mt-3 mt-md-0'"
                        :pageClass="'page-item'"
                        :pageLinkClass="'page-link'"
                        :prevClass="'page-item'"
                        :prevLinkClass="'page-link'"
                        :nextClass="'page-item'"
                        :nextLinkClass="'page-link'"
                    >
                    </paginate>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import { mapActions, mapState } from "vuex";

export default {
    name: "DataUser",
    data() {
        return {
            search: "",
            rows: 20,
            loadingPage: true,
            sort: "updated_at",
            asc: true
        };
    },
    created() {
        this.getUsers({
            search: this.search,
            rows: this.rows,
            sort: this.sort,
            asc: this.asc
        });
    },
    computed: {
        ...mapState("user", {
            users: state => state.users
        }),
        page: {
            get() {
                return this.$store.state.user.page
                    ? this.$store.state.user.page
                    : 1;
            },
            set(val) {
                this.$store.commit("user/SET_PAGE", val);
                this.getUsers({
                    search: this.search,
                    rows: this.rows,
                    rowsUpdate: 0,
                    sort: this.sort,
                    asc: this.asc
                });
            }
        }
    },
    watch: {
        search() {
            this.getUsers({
                search: this.search,
                rows: this.rows,
                rowsUpdate: 1,
                sort: this.sort,
                asc: this.asc
            });
        },
        rows() {
            this.getUsers({
                search: this.search,
                rows: this.rows,
                rowsUpdate: 1,
                sort: this.sort,
                asc: this.asc
            });
        }
    },
    mounted() {
        this.loadingStop();
    },
    methods: {
        sortBy(val) {
            this.asc = this.sort == val ? !this.asc : false;
            this.sort = val;
            this.getUsers({
                search: this.search,
                rows: this.rows,
                rowsUpdate: 1,
                sort: this.sort,
                asc: this.asc
            });
        },
        loadingStop() {
            setTimeout(() => {
                this.loadingPage = false;
            }, 500);
        },
        //MENGAMBIL FUNGSI GET USER DAN REMOVE DARI VUEX MODULE users
        ...mapActions("user", ["getUsers", "removeUser"]),
        //KETIKA TOMBOL HAPUS DICLICK, MAKA AKAN MENJALANKAN METHOD INI
        deleteUser(id) {
            //AKAN MENAMPILKAN JENDELA KONFIRMASI
            this.$swal({
                title: "Kamu Yakin?",
                text: "Tindakan ini akan menghapus secara permanent!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya, Lanjutkan!"
            }).then(result => {
                //JIKA DISETUJUI
                if (result.value) {
                    //MAKA FUNGSI removeOutlet AKAN DIJALANKAN
                    this.removeUser(id);
                }
            });
        }
    }
};
</script>
