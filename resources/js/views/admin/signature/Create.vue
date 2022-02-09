<template>
    <main>
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div
                    class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center"
                >
                    <h1 class="flex-sm-fill h3 my-2">Administrator : Create Signature</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <router-link class="link-fx" :to="{ name: 'user' }">Signature</router-link>
                            </li>
                            <li class="breadcrumb-item">Create Signature</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!--Loading-->
            <div class="block" v-if="loadingPage == 1" style="height:200px">
                <div class="block-content block-content-full pb-0" style="padding-top: 80px">
                    <div
                        class="spinner-border spinner-border-lg text-info mx-auto"
                        role="status"
                        style="display: flex;
                        justify-content: center;"
                    >
                    </div>
                    <center class="mt-2"><span class="text-center" style="opacity:0.7">Loading</span></center>
                </div>
            </div>
                        <div class="block" v-if="loadingPage == 2" style="height:200px">
                <div class="block-content block-content-full pb-0" style="padding-top: 80px">
                    <div
                        class="spinner-border spinner-border-lg text-info mx-auto"
                        role="status"
                        style="display: flex;
                        justify-content: center;"
                    >
                    </div>
                    <center class="mt-2"><span class="text-center" style="opacity:0.7">Save Data</span></center>
                </div>
            </div>
            <!-- Basic -->
            <div class="block" v-if="loadingPage == 0">
                <div class="block-content block-content-full">
                    <form
                        action="be_forms_elements.html"
                        method="POST"
                        enctype="multipart/form-data"
                        onsubmit="return false;"
                    >
                        <!--Form-->
                        <div class="row push font-size-sm">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group" >
                                    <label for="example-text-input">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Fullname"
                                        v-model="signature.signature_name"
                                        :class="{ 'is-invalid': errors.signature_name }"
                                    />
                                    <p class="text-danger" v-if="errors.signature_name">{{ errors.signature_name[0] }}</p>
                                </div>
                                <div class="form-group" >
                                    <label for="example-text-input">Job Position</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Job Position"
                                        v-model="signature.signature_position"
                                        :class="{ 'is-invalid': errors.signature_position }"
                                    />
                                    <p class="text-danger" v-if="errors.signature_position">{{ errors.signature_position[0] }}</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                <!--TRO-->
                                <div class="form-group font-size-sm">
                                    <label class="d-block">Document</label>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline1"
                                        >Leaseholder Invoice</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline1"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline1"
                                        >Letter of Assignment</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline1"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline1"
                                        >Purchase Order</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline2"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline2"
                                        >Bills Invoice</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline2"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline2"
                                        >Bills Quotation</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline2"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline2"
                                        >Bills Order</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="example-checkbox-inline2"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="example-checkbox-inline2"
                                        >Financial Report</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END Form-->
                        <!-- Submit -->
                        <div class="row items-push">
                            <div class="col-12 text-center">
                                <p
                                    class="font-size-sm text-muted"
                                >* Required filled, Make sure all data is correctly filled</p>
                                <button
                                    type="submit"
                                    class="btn btn-sm btn-success"
                                    v-ripple="{ center: true }"
                                    @click.prevent="submit"
                                >
                                    <i class="fa fa-fw fa-check mr-1"></i> Save
                                </button>
                                <router-link
                                    type="button"
                                    class="btn btn-sm btn-alt-light"
                                    tag="button"
                                    v-ripple="{ center: true }"
                                    :to="{name: 'signature'}"
                                >
                                    <i class="fa fa-fw fa-times mr-1"></i> Cancel
                                </router-link>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </form>
                </div>
            </div>
            <!-- END Basic -->
        </div>
        <!-- END Page Content -->
    </main>
</template>

<script>
import { mapActions, mapState, mapMutations } from 'vuex'

export default {
    name: "create-signature",

    data() {
        return {
            loadingPage: 1,
        };
    },
    computed: {
        ...mapState(['errors']), //MENGAMBIL STATE ERRORS
        ...mapState('signature', {
            signature: state => state.signature
        })
    },
    mounted() {
        this.doLoading(0);
    },
    methods: {
        //VUEX
        ...mapMutations('signature', ['CLEAR_FORM']), 
        ...mapActions('signature', ['submitSignature']),
        //SWAL
        alert(text, tipe) {
            if (tipe === 1) {
                this.$swal({
                    title: "Succes",
                    text: text,
                    icon: "success"
                });
            } else if (tipe === 2) {
                this.$swal({
                    title: "Something Wrong",
                    text: text,
                    icon: "error"
                });
            } else if (tipe === 3) {
                this.$swal({
                    title: "Are you sure ?",
                    text: text,
                    icon: "warning",
                    buttons: ["Cancel", "Delete"],
                    dangerMode: true
                }).then(willDelete => {
                    if (willDelete) {
                        this.alert("Data has been deleted !", 1);
                    }
                });
            } else if (tipe === 4) {
                this.$swal({
                    title: "Are you sure ?",
                    text: text,
                    icon: "warning",
                    buttons: ["Cancel", "Update"],
                    dangerMode: false
                }).then(willDelete => {
                    if (willDelete) {
                        this.alert("Data has been deleted !", 1);
                    }
                });
            }
        },
        //METHOD
        doLoading(type) {
            this.loadingPage = type;
            setTimeout(() => {
                this.loadingPage = 0;
            }, 500);
        },
        submit() {
            this.doLoading(2);
            this.submitSignature().then(() => {
                this.$router.push({ name: 'signature' })
                this.alert("Successfully create Signature Data ",1 );
            })
        }
    },
    destroyed() {
        //FORM DI BERSIHKAN
        this.CLEAR_FORM()
    }
};
</script>