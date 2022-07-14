<template>
    <main>
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div
                    class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center"
                >
                    <h1 class="flex-sm-fill h3 my-2">
                        Administrator : Edit News
                    </h1>
                    <nav
                        class="flex-sm-00-auto ml-sm-3"
                        aria-label="breadcrumb"
                    >
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <router-link
                                    class="link-fx"
                                    :to="{ name: 'news' }"
                                    >News</router-link
                                >
                            </li>
                            <li class="breadcrumb-item">Edit News</li>
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
            <div class="block" v-if="loadingPage == 0 &&  auth.data.name == news.news_username">
                <div class="block-content block-content-full">
                    <form
                        action="be_forms_elements.html"
                        method="POST"
                        enctype="multipart/form-data"
                        onsubmit="return false;"
                    >
                        <!--Form-->
                        <div class="row font-size-sm">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="example-text-input"
                                        >News Title</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="news.news_title"
                                        :class="{
                                            'is-invalid': errors.news_title
                                        }"
                                    />
                                    <p
                                        class="text-danger"
                                        v-if="errors.news_title"
                                    >
                                        {{ errors.news_title[0] }}
                                    </p>
                                </div>
                                <div class="form-group" v-if="news.photo">
                                    <label for="example-text-input"
                                        >Foto</label
                                    ><br>
                                    <img
                                        :src="'/storage/news/' + news.photo"
                                        alt="foto"
                                        class="img-thumbnail"
                                        style="
                                            width: 200px;
                                            height: 200px;
                                            object-fit: cover;
                                        "
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="d-block" for="user-photo"
                                        >Upload Photo Baru</label
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
                                    <label for="example-text-input"
                                        >News Content</label
                                    >
                                    <ckeditor
                                        tag-name="textarea"
                                        :editor="editor"
                                        v-model="news.news_content"
                                    ></ckeditor>
                                    <p
                                        class="text-danger"
                                        v-if="errors.news_content"
                                    >
                                        {{ errors.news_content[0] }}
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
                                    @click.prevent="submitData"
                                >
                                    <i class="fa fa-fw fa-check mr-1"></i> Save
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-danger"
                                    v-ripple="{ center: true }"
                                    @click.prevent="deleteData"
                                >
                                    <i class="fa fa-fw fa-trash mr-1"></i>
                                    Delete
                                </button>
                                <router-link
                                    type="button"
                                    class="btn btn-sm btn-alt-light"
                                    tag="button"
                                    v-ripple="{ center: true }"
                                    :to="{ name: 'news' }"
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

            <div class="block" v-else>
                <div class="block-content block-content-full">
                    <div class="row font-size-sm">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="example-text-input"
                                        >News Title :</label
                                    >
                                    <p v-html="news.news_title"></p>
                                </div>
                                <div class="form-group" v-if="news.photo">
                                    <label for="example-text-input"
                                        >Foto :</label
                                    ><br>
                                    <img
                                        :src="'/storage/news/' + news.photo"
                                        alt="foto"
                                        class="img-thumbnail"
                                        style="
                                            width: 200px;
                                            height: 200px;
                                            object-fit: cover;
                                        "
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input"
                                        >News Content :</label
                                    >
                                    <p v-html="news.news_content"></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- END Basic -->
        </div>
        <!-- END Page Content -->
    </main>
</template>

<script>
import { mapActions, mapState, mapMutations } from "vuex";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
    name: "edit-news",

    created() {
        if (this.$route.params.id) {
            this.editNews(this.$route.params.id);
        } else {
            this.$router.push({ name: "news" });
            this.alert("Data not found, select data first", 2);
        }
    },
    data() {
        return {
            loadingPage: 1,
            editor: ClassicEditor
        };
    },
    computed: {
        ...mapState(["errors"]),
        ...mapState(["auth"]),
        ...mapState("news", {
            news: state => state.news
        })
    },
    mounted() {
        this.doLoading(1);
    },
    methods: {
        ...mapMutations("news", ["CLEAR_FORM"]),
        ...mapActions("news", ["editNews", "updateNews", "removeNews"]),
        doLoading(type) {
            this.loadingPage = type;
            setTimeout(() => {
                this.loadingPage = 0;
            }, 400);
        },
        uploadImage(e) {
            let file = e.target.files[0];
            let reader = new FileReader();
            reader.onloadend = file => {
                this.news.photo = reader.result;
            };
            reader.readAsDataURL(file);
        },
        submitData() {
            this.doLoading(2);
            this.updateNews(this.$route.params.id).then(() => {
                this.$router.push({ name: "news" });
                this.alert("Successfully Edit News Data", 1);
                this.loadingPage = 0;
            });
        },
        deleteData() {
            this.$swal({
                title: "Are you sure ?",
                text: "Deleted data cannot be recovery",
                icon: "warning",
                buttons: ["Cancel", "Delete"],
                dangerMode: true
            }).then(willDelete => {
                if (willDelete) {
                    this.removeNews(this.$route.params.id)
                        .then(() => {
                            this.$router.push({ name: "news" });
                            this.alert("Data has been deleted !", 1);
                            this.loadingPage = 0;
                        })
                        .catch(error => {
                            if (error) {
                                console.log(error);
                            }
                        });
                }
            });
        }
    },
    destroyed() {
        this.CLEAR_FORM();
    }
};
</script>
