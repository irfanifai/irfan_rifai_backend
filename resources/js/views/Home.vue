<template>
    <v-app style="background-color: #f8f8f8;">
        <v-main>
            <!-- Hero -->
            <div class="bg-image overflow-hidden background-dashboard">
                <div class="bg-primary-dark-op">
                    <div class="content content-narrow content-full">
                        <div
                            class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left"
                        >
                            <div class="flex-sm-fill">
                                <h1
                                    class="font-w600 text-white mb-0"
                                    data-toggle="appear"
                                >
                                    Dashboard
                                </h1>
                                <h2
                                    class="h4 font-w400 text-white-75 mb-0"
                                    data-toggle="appear"
                                    data-timeout="250"
                                >
                                    Welcome {{ auth.data.name }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content content-narrow">
                <!-- Stats -->
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6 col-xl-6">
                        <a
                            class="block block-rounded block-link-pop border-left border-primary border-4x"
                            href="javascript:void(0)"
                        >
                            <div class="block-content block-content-full">
                                <div
                                    class="font-size-sm font-w600 text-uppercase text-muted"
                                >
                                    User
                                </div>
                                <div class="font-size-h2 font-w400 text-dark">
                                    {{ dashboard.countUser }}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6 col-xl-6">
                        <a
                            class="block block-rounded block-link-pop border-left border-primary border-4x"
                            href="javascript:void(0)"
                        >
                            <div class="block-content block-content-full">
                                <div
                                    class="font-size-sm font-w600 text-uppercase text-muted"
                                >
                                    Artikel
                                </div>
                                <div class="font-size-h2 font-w400 text-dark">
                                    {{ dashboard.countNews }}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Table -->
                <div class="row row-deck">
                    <!-- Latest Customers -->
                    <div class="col-lg-12">
                        <!-- Dynamic Table Full Pagination -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">User Admin</h3>
                            </div>
                            <div class="block-content block-content-full pt-0">
                                <table
                                    class="table table-bordered table-striped table-vcenter js-dataTable-full pt-2"
                                >
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center"
                                                style="width: 80px;"
                                            >
                                                ID
                                            </th>
                                            <th>Name</th>
                                            <th
                                                class="d-none d-sm-table-cell"
                                                style="width: 30%;"
                                            >
                                                Username
                                            </th>
                                            <th
                                                class="d-none d-sm-table-cell"
                                                style="width: 15%;"
                                            >
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        v-if="
                                            users.data && users.data.length > 0
                                        "
                                    >
                                        <tr
                                            v-for="(user, index) in users.data"
                                            :key="index"
                                        >
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                {{ index + 1 }}
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                {{ user.name }}
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                {{ user.username }}
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                {{ user.email }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Dynamic Table Full Pagination -->
                    </div>
                    <!-- END Latest Customers -->
                </div>
                <!-- END Customers and Latest Orders -->
            </div>
            <!-- END Page Content -->
        </v-main>
    </v-app>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
    name: "dashboard",
    components: {},
    data() {
        return {
            search: "",
            rows: "",
            loadingPage: true,
            sort: "updated_at",
            asc: true
        };
    },
    computed: {
        ...mapState(["auth"]),
        ...mapState("dashboard", {
            dashboard: state => state.dashboard
        }),
        ...mapState("user", {
            users: state => state.users
        })
    },
    created() {
        this.getCountData();
        this.getUsers({
            search: this.search,
            rows: this.rows,
            sort: this.sort,
            asc: this.asc
        });
    },
    methods: {
        ...mapActions("dashboard", ["getCountData"]),
        ...mapActions("user", ["getUsers"])
    }
};
</script>
