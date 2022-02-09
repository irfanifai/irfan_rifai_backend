<template>
    <main>
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div
                    class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center"
                >
                    <h1 class="flex-sm-fill h3 my-2">
                        Administrator : Create User
                    </h1>
                    <nav
                        class="flex-sm-00-auto ml-sm-3"
                        aria-label="breadcrumb"
                    >
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <router-link
                                    class="link-fx"
                                    :to="{ name: 'user' }"
                                    >User</router-link
                                >
                            </li>
                            <li class="breadcrumb-item">Create User</li>
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
            <div class="block" v-if="loadingPage == 2" style="height:200px">
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
                            >Save Data</span
                        >
                    </center>
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
                                <div class="form-group">
                                    <label for="example-text-input"
                                        >Full Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Full Name"
                                        v-model="user.name"
                                        :class="{ 'is-invalid': errors.name }"
                                    />
                                    <p class="text-danger" v-if="errors.name">
                                        {{ errors.name[0] }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input"
                                        >Username</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Username"
                                        v-model="user.username"
                                        @keydown.space.prevent
                                        :class="{
                                            'is-invalid': errors.username
                                        }"
                                    />
                                    <p
                                        class="text-danger"
                                        v-if="errors.username"
                                    >
                                        {{ errors.username[0] }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input"
                                        >Email</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email Address"
                                        v-model="user.email"
                                        :class="{ 'is-invalid': errors.email }"
                                    />
                                    <p class="text-danger" v-if="errors.email">
                                        {{ errors.email[0] }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="d-block" for="user-photo"
                                        >Photo</label
                                    >
                                    <input
                                        type="file"
                                        id="user-photo"
                                        @change="uploadImage"
                                        :class="{ 'is-invalid': errors.photo }"
                                    />
                                    <p class="text-danger" v-if="errors.photo">
                                        {{ errors.photo[0] }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="example-password-input"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Password"
                                        v-model="user.password"
                                        :class="{
                                            'is-invalid': errors.password
                                        }"
                                    />
                                    <p
                                        class="text-danger"
                                        v-if="errors.password"
                                    >
                                        {{ errors.password[0] }}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="example-password-input"
                                        >Re-type Pasword</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="example-password-input"
                                        placeholder="Re-type Pasword"
                                        v-model="user.retypepassword"
                                        :class="{
                                            'is-invalid': errors.retypepassword
                                        }"
                                    />
                                    <p
                                        class="text-danger"
                                        v-if="errors.retypepassword"
                                    >
                                        {{ errors.retypepassword[0] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--END Form-->
                        <!-- Submit -->
                        <div class="row items-push">
                            <div class="col-12 text-center">
                                <p class="font-size-sm text-muted">
                                    * Required filled, Make sure all data is
                                    correctly filled
                                </p>
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
                                    :to="{ name: 'user' }"
                                >
                                    <i class="fa fa-fw fa-times mr-1"></i>
                                    Cancel
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
import { mapActions, mapState, mapMutations } from "vuex";

export default {
    name: "create-user",

    data() {
        return {
            loadingPage: 1
        };
    },
    computed: {
        ...mapState(["errors"]), //MENGAMBIL STATE ERRORS
        ...mapState("user", {
            user: state => state.user
        })
    },
    mounted() {
        this.doLoading(0);
    },
    methods: {
        //VUEX
        ...mapMutations("user", ["CLEAR_FORM"]),
        ...mapActions("user", ["submitUser"]),
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
        uploadImage(e) {
            let file = e.target.files[0];
            let reader = new FileReader();
            reader.onloadend = file => {
                this.user.photo = reader.result;
            };
            reader.readAsDataURL(file);
        },
        submit() {
            this.doLoading(2);
            this.submitUser().then(() => {
                this.$router.push({ name: "user" });
                this.alert("Successfully create User Data ", 1);
            });
        }
    },
    destroyed() {
        //FORM DI BERSIHKAN
        this.CLEAR_FORM();
    }
};
</script>
