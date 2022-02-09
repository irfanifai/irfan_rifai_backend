<template>
    <v-app style="background-color: #f8f8f8;">
        <v-content>
            <!-- Hero -->
            <div class="bg-image overflow-hidden background-dashboard">
                <div class="bg-primary-dark-op">
                    <div class="content content-narrow content-full">
                        <div
                            class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left"
                        >
                            <div class="flex-sm-fill">
                                <h1 class="font-w600 text-white mb-0" data-toggle="appear">Dashboard</h1>
                                <h2
                                    class="h4 font-w400 text-white-75 mb-0"
                                    data-toggle="appear"
                                    data-timeout="250"
                                >Welcome Administrator</h2>
                            </div>
                            <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                <span
                                    class="d-inline-block"
                                    data-toggle="appear"
                                    data-timeout="350"
                                >
                                    <button
                                        class="btn btn-primary px-4 py-2"
                                        data-toggle="click-ripple"
                                        href="javascript:void(0)"
                                    >
                                        <i class="fa fa-plus mr-1"></i> New Project
                                    </button>
                                </span>
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
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a
                            class="block block-rounded block-link-pop border-left border-primary border-4x"
                            href="javascript:void(0)"
                        >
                            <div class="block-content block-content-full">
                                <div
                                    class="font-size-sm font-w600 text-uppercase text-muted"
                                >Visitors</div>
                                <div class="font-size-h2 font-w400 text-dark">120,580</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a
                            class="block block-rounded block-link-pop border-left border-primary border-4x"
                            href="javascript:void(0)"
                        >
                            <div class="block-content block-content-full">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                <div class="font-size-h2 font-w400 text-dark">150</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a
                            class="block block-rounded block-link-pop border-left border-primary border-4x"
                            href="javascript:void(0)"
                        >
                            <div class="block-content block-content-full">
                                <div
                                    class="font-size-sm font-w600 text-uppercase text-muted"
                                >Earnings</div>
                                <div class="font-size-h2 font-w400 text-dark">$3,200</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a
                            class="block block-rounded block-link-pop border-left border-primary border-4x"
                            href="javascript:void(0)"
                        >
                            <div class="block-content block-content-full">
                                <div
                                    class="font-size-sm font-w600 text-uppercase text-muted"
                                >Avg Sale</div>
                                <div class="font-size-h2 font-w400 text-dark">$21</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Dashboard Charts -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block block-rounded block-mode-loading-oneui">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Earnings in $</h3>
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
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full text-center">
                                <div class="py-3">
                                    <chart-sales />
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row items-push text-center py-3">
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-wallet fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">$148,000</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+9% Earnings</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+20% Tickets</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-users fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+46% Clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block block-rounded block-mode-loading-oneui">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Sales</h3>
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
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full text-center">
                                <div class="py-3">
                                    <chart-earning />
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row items-push text-center py-3">
                                    <div class="col-6 col-xl-3">
                                        <i class="fab fa-wordpress fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+20% Themes</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-font fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+25% Fonts</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-archive fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">-10% Icons</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-paint-brush fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+8% Graphics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Dashboard Charts -->

                <!-- Customers and Latest Orders -->
                <div class="row row-deck">
                    <!-- Latest Customers -->
                    <div class="col-lg-6">
                        <div class="block block-mode-loading-oneui">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Latest Customers</h3>
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
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table
                                    class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0"
                                >
                                    <thead>
                                        <tr class="text-uppercase">
                                            <th class="font-w700" style="width: 80px;">ID</th>
                                            <th
                                                class="d-none d-sm-table-cell font-w700 text-center"
                                                style="width: 100px;"
                                            >Photo</th>
                                            <th class="font-w700">Name</th>
                                            <th
                                                class="d-none d-sm-table-cell font-w700 text-center"
                                                style="width: 80px;"
                                            >Orders</th>
                                            <th class="font-w700 text-center" style="width: 60px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar16.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">Adam McCoy</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >5</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar1.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">Megan Fuller</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >14</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar11.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">David Fuller</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >15</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar2.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">Carol Ray</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >36</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar12.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">Henry Harrison</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >3</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar3.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">Lori Moore</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >1</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#01368</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <img
                                                    class="img-avatar img-avatar32"
                                                    src="assets/media/avatars/avatar12.jpg"
                                                    alt
                                                />
                                            </td>
                                            <td class="font-w600">Jose Mills</td>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <a
                                                    class="link-fx font-w600"
                                                    href="javascript:void(0)"
                                                >12</a>
                                            </td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Edit"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Customers -->

                    <!-- Latest Orders -->
                    <div class="col-lg-6">
                        <div class="block block-mode-loading-oneui">
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
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table
                                    class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0"
                                >
                                    <thead>
                                        <tr class="text-uppercase">
                                            <th class="font-w700">ID</th>
                                            <th class="d-none d-sm-table-cell font-w700">Date</th>
                                            <th class="font-w700">State</th>
                                            <th
                                                class="d-none d-sm-table-cell font-w700 text-right"
                                                style="width: 120px;"
                                            >Price</th>
                                            <th class="font-w700 text-center" style="width: 60px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07835</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">today</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-warning">Pending..</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$999,99</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07834</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">today</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-warning">Pending..</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$2.299,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07833</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">today</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-success">Completed</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$1200,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07832</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">today</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-danger">Cancelled</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$399,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07831</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">yesterday</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-success">Completed</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$349,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07830</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">yesterday</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-success">Completed</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$999,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07829</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">yesterday</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-success">Completed</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$39,99</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07828</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">yesterday</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-success">Completed</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$499,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="font-w600">#07827</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="font-size-sm text-muted">yesterday</span>
                                            </td>
                                            <td>
                                                <span class="font-w600 text-success">Completed</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-right">$325,00</td>
                                            <td class="text-center">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-toggle="tooltip"
                                                    data-placement="left"
                                                    title="Manage"
                                                >
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Orders -->
                </div>
                <!-- END Customers and Latest Orders -->

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
                                    <button type="button" class="btn-block-option">
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
                                            <th class="text-center" style="width: 80px;">ID</th>
                                            <th>Name</th>
                                            <th
                                                class="d-none d-sm-table-cell"
                                                style="width: 30%;"
                                            >Email</th>
                                            <th
                                                class="d-none d-sm-table-cell"
                                                style="width: 15%;"
                                            >Access</th>
                                            <th style="width: 15%;">Registered</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center font-size-sm">1</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Carol Ray</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client1
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">10 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">2</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Albert Ray</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client2
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">7 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">3</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Megan Fuller</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client3
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">6 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">4</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Marie Duncan</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client4
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">5</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Jose Mills</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client5
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">5 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">6</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">David Fuller</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client6
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">3 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">7</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Barbara Scott</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client7
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">7 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">8</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Jeffrey Shaw</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client8
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">5 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">9</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Justin Hunt</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client9
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">4 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">10</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Betty Kelley</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client10
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">10 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">11</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Amber Harvey</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client11
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">2 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">12</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">David Fuller</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client12
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">13</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Ryan Flores</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client13
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">2 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">14</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Danielle Jones</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client14
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">9 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">15</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Helen Jacobs</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client15
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">4 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">16</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Albert Ray</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client16
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">17</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Lori Grant</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client17
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">7 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">18</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Danielle Jones</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client18
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">3 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">19</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Andrea Gardner</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client19
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">9 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">20</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Melissa Rice</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client20
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">6 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">21</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Adam McCoy</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client21
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">9 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">22</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Judy Ford</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client22
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">9 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">23</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Jesse Fisher</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client23
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">4 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">24</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Henry Harrison</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client24
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">5 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">25</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Jesse Fisher</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client25
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">26</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Brian Cruz</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client26
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">9 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">27</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Lori Moore</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client27
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">28</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Albert Ray</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client28
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">29</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Amber Harvey</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client29
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">4 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">30</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Andrea Gardner</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client30
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">10 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">31</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Brian Cruz</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client31
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">5 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">32</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Sara Fields</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client32
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">5 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">33</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Danielle Jones</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client33
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">5 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">34</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Lori Grant</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client34
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">2 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">35</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Betty Kelley</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client35
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">4 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">36</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Lori Grant</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client36
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">8 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">37</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Wayne Garcia</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client37
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">9 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">38</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Jeffrey Shaw</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client38
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">10 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">39</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Henry Harrison</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client39
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">6 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">40</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Adam McCoy</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client40
                                                <em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">7 days ago</em>
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
        </v-content>
    </v-app>
</template>

<script>
import SalesChart from "./../components/ChartDashboardSales";
import EarningChart from "./../components/ChartDashboardEarning";
import Chart from "./../../../public/js/plugins/chart.js/Chart.bundle.min.js";

export default {
    components: {
        "chart-sales": SalesChart,
        "chart-earning": EarningChart
    },
    data() {
        return {
            search: "",
            headers: [
                {
                    text: "Dessert (100g serving)",
                    align: "start",
                    sortable: false,
                    value: "name"
                },
                { text: "Calories", value: "calories" },
                { text: "Fat (g)", value: "fat" },
                { text: "Carbs (g)", value: "carbs" },
                { text: "Protein (g)", value: "protein" },
                { text: "Iron (%)", value: "iron" }
            ],
            desserts: [
                {
                    name: "Frozen Yogurt",
                    calories: 159,
                    fat: 6.0,
                    carbs: 24,
                    protein: 4.0,
                    iron: "1%"
                },
                {
                    name: "Ice cream sandwich",
                    calories: 237,
                    fat: 9.0,
                    carbs: 37,
                    protein: 4.3,
                    iron: "1%"
                },
                {
                    name: "Eclair",
                    calories: 262,
                    fat: 16.0,
                    carbs: 23,
                    protein: 6.0,
                    iron: "7%"
                },
                {
                    name: "Cupcake",
                    calories: 305,
                    fat: 3.7,
                    carbs: 67,
                    protein: 4.3,
                    iron: "8%"
                },
                {
                    name: "Gingerbread",
                    calories: 356,
                    fat: 16.0,
                    carbs: 49,
                    protein: 3.9,
                    iron: "16%"
                },
                {
                    name: "Jelly bean",
                    calories: 375,
                    fat: 0.0,
                    carbs: 94,
                    protein: 0.0,
                    iron: "0%"
                },
                {
                    name: "Lollipop",
                    calories: 392,
                    fat: 0.2,
                    carbs: 98,
                    protein: 0,
                    iron: "2%"
                },
                {
                    name: "Honeycomb",
                    calories: 408,
                    fat: 3.2,
                    carbs: 87,
                    protein: 6.5,
                    iron: "45%"
                },
                {
                    name: "Donut",
                    calories: 452,
                    fat: 25.0,
                    carbs: 51,
                    protein: 4.9,
                    iron: "22%"
                },
                {
                    name: "KitKat",
                    calories: 518,
                    fat: 26.0,
                    carbs: 65,
                    protein: 7,
                    iron: "6%"
                }
            ]
        };
    },
    mounted() {},
    methods: {}
};
</script>
