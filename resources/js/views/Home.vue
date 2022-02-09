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
                                    User Admin
                                </div>
                                <div class="font-size-h2 font-w400 text-dark">
                                    6
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
                                    150
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
                                <h3 class="block-title">Latest Orders</h3>
                                <div class="block-options">
                                    <button
                                        type="button"
                                        class="btn-block-option"
                                        data-toggle="block-option"
                                        data-action="state_toggle"
                                        data-action-mode="demo"
                                    >
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-block-option"
                                    >
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
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
                                                Email
                                            </th>
                                            <th
                                                class="d-none d-sm-table-cell"
                                                style="width: 15%;"
                                            >
                                                Access
                                            </th>
                                            <th style="width: 15%;">
                                                Registered
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                1
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Carol Ray</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client1
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >10 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                2
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Albert Ray</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client2
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >7 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                3
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Megan Fuller</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client3
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >6 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                4
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Marie Duncan</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client4
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-warning"
                                                    >Trial</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                5
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Jose Mills</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client5
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >5 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                6
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >David Fuller</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client6
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >3 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                7
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Barbara Scott</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client7
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info"
                                                    >Business</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >7 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                8
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Jeffrey Shaw</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client8
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info"
                                                    >Business</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >5 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                9
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Justin Hunt</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client9
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >4 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                10
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Betty Kelley</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client10
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >10 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                11
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Amber Harvey</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client11
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >2 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                12
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >David Fuller</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client12
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info"
                                                    >Business</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                13
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Ryan Flores</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client13
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >2 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                14
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Danielle Jones</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client14
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >9 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                15
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Helen Jacobs</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client15
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >4 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                16
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Albert Ray</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client16
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                17
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Lori Grant</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client17
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >7 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                18
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Danielle Jones</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client18
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-warning"
                                                    >Trial</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >3 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                19
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Andrea Gardner</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client19
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >9 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                20
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Melissa Rice</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client20
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-warning"
                                                    >Trial</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >6 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                21
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Adam McCoy</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client21
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >9 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                22
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Judy Ford</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client22
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-warning"
                                                    >Trial</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >9 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                23
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Jesse Fisher</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client23
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >4 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                24
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Henry Harrison</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client24
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >5 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                25
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Jesse Fisher</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client25
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                26
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Brian Cruz</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client26
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info"
                                                    >Business</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >9 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                27
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Lori Moore</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client27
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                28
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Albert Ray</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client28
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                29
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Amber Harvey</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client29
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >4 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                30
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Andrea Gardner</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client30
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >10 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                31
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Brian Cruz</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client31
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info"
                                                    >Business</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >5 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                32
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Sara Fields</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client32
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >5 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                33
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Danielle Jones</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client33
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info"
                                                    >Business</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >5 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                34
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Lori Grant</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client34
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >2 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                35
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Betty Kelley</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client35
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >4 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                36
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Lori Grant</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client36
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-warning"
                                                    >Trial</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >8 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                37
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Wayne Garcia</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client37
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger"
                                                    >Disabled</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >9 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                38
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Jeffrey Shaw</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client38
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-primary"
                                                    >Personal</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >10 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                39
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Henry Harrison</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client39
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >6 days ago</em
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="text-center font-size-sm"
                                            >
                                                40
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a
                                                    href="be_pages_generic_blank.html"
                                                    >Adam McCoy</a
                                                >
                                            </td>
                                            <td
                                                class="d-none d-sm-table-cell font-size-sm"
                                            >
                                                client40
                                                <em class="text-muted"
                                                    >@example.com</em
                                                >
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span
                                                    class="badge badge-success"
                                                    >VIP</span
                                                >
                                            </td>
                                            <td>
                                                <em
                                                    class="text-muted font-size-sm"
                                                    >7 days ago</em
                                                >
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
import { mapState, mapMutations } from "vuex";

export default {
    components: {},
    data() {
        return {
            data: ""
        };
    },
    computed: {
        ...mapState(["auth"])
    },
    mounted() {},
    methods: {}
};
</script>
