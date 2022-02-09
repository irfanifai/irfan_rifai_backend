   <template>
    <main>
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div
                    class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center"
                >
                    <h1 class="flex-sm-fill h3 my-2">Administrator : Chart of Accounting</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <router-link class="link-fx" :to="{ name: 'home' }">Dashboard</router-link>
                            </li>
                            <li class="breadcrumb-item">Bank Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!--Loading-->
            <div class="block" v-if="loadingPage || !banks.data" style="height:200px">
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
            <!-- Dynamic Table Full -->
            <div class="block" v-else>
                <div class="block-content block-content-full pb-0 pt-3">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-6 mb-2 mb-sm-0 pb-0">
                            <label>Show :</label>
                            <select class="form-control-sm custom-select" style="max-width:115px" v-model="rows">
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
                            <button
                                type="button"
                                class="btn btn-sm btn-success btn-icon float-right m-1"
                                v-ripple="{ center: true }"
                            >
                                <i class="fa fa-file-excel"></i>
                            </button>
                            <button
                                type="button"
                                class="btn btn-sm btn-danger btn-icon float-right m-1"
                                v-ripple="{ center: true }"
                            >
                                <i class="fa fa-file-pdf"></i>
                            </button>
                            <router-link
                                type="button"
                                class="btn btn-sm btn-info float-right m-1"
                                :to="{ name: 'bank-create' }"
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
                        <table class="table table-bordered table-vcenter table-hover">
                            <thead style="background-color: whitesmoke;">
                                <tr>
                                    <th class="table-header-relative text-center" style="width: 80px;">No.</th>
                                    <th class="table-header-relative sort-head" @click="sortBy('bank_name')">
                                        Name of Bank
                                        <i class="fa fa-sort sort-icon" v-bind:class="{ active: sort == 'bank_name' }"></i> 
                                    </th>
                                    <th class="table-header-relative sort-head" @click="sortBy('bank_cabang')">
                                        Branch of Bank
                                        <i class="fa fa-sort sort-icon" v-bind:class="{ active: sort == 'bank_cabang' }"></i>
                                    </th>
                                    <th class="table-header-relative">
                                        Bank Account No.
                                    </th>
                                    <th class="table-header-relative sort-head" @click="sortBy('bank_rekening_name')">
                                        Bank Account Name
                                        <i class="fa fa-sort sort-icon" v-bind:class="{ active: sort == 'bank_rekening_name' }"></i> 
                                    </th>
                                </tr>
                            </thead>
                            <tbody v-if="banks.data && banks.data.length > 0">
                                <router-link 
                                :to="{ name: 'bank-edit', params: {id: bank.id} }" 
                                tag="tr"
                                v-for="(bank, index) in banks.data"
                                :key="index">
                                    <td class="text-center font-size-sm">{{index + 1}}</td>
                                    <td class="font-size-sm">{{bank.bank_name}}</td>
                                    <td class="font-size-sm">{{bank.bank_cabang}}</td>
                                    <td class="font-size-sm">{{bank.bank_rekening}}</td>
                                    <td class="font-size-sm">{{bank.bank_rekening_name}}</td>
                                </router-link>
                            </tbody>
                            <tbody v-else>
                                <tr class="data-empty">
                                    <td class="text-center" colspan="5" style="opacity:0.8; padding:2.5rem;">
                                        <i class="fa fa-search fa-1x"></i>
                                        <br>
                                        Data Not Found
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            class="text-muted font-size-sm d-inline d-sm-none"
                            style="opacity:0.5;"
                        >Swipe left here to see full column >></p>
                    </div>

                    <paginate
                    v-model="page"
                    :page-count="this.$store.state.bank.last_page"
                    :prev-text="'Prev'"
                    :next-text="'Next'"
                    :container-class="'pagination mt-3 mt-md-0'"
                    :pageClass="'page-item'"
                    :pageLinkClass="'page-link'"
                    :prevClass="'page-item'"
                    :prevLinkClass="'page-link'"
                    :nextClass="'page-item'"
                    :nextLinkClass="'page-link'">
                    </paginate>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import { mapActions, mapState } from 'vuex'

export default {
    name: 'bank',
    data() {
        return {
            search: '',
            rows: 20,
            loadingPage: true,
            sort: 'updated_at',
            asc: true
        }
    },
    created() {
        this.getBank({'search': this.search, 'rows': this.rows, 'sort' : this.sort, 'asc' : this.asc})
    },
    computed: {
        ...mapState('bank', {
            banks: state => state.banks
        }),
        page: {
            get() {
                return this.$store.state.bank.page ? this.$store.state.bank.page: 1; 
            },
            set(val) {
                this.$store.commit('news/SET_PAGE', val);
                this.getBank({'search': this.search, 'rows': this.rows,'rowsUpdate' : 0, 'sort' : this.sort, 'asc' : this.asc})
            }
        },
    },
    watch: {
        search() {
            this.getBank({'search': this.search, 'rows': this.rows, 'rowsUpdate' : 1, 'sort' : this.sort, 'asc' : this.asc})
        },        
        rows() {
            this.getBank({'search': this.search, 'rows': this.rows, 'rowsUpdate' : 1, 'sort' : this.sort, 'asc' : this.asc})
        },
    },
    mounted(){
        this.loadingStop();
    },
    methods: {
        ...mapActions('bank', ['getBank']),
        sortBy(val) {
            this.asc = (this.sort == val) ? !this.asc : false;
            this.sort = val;
            this.getBank({'search': this.search, 'rows': this.rows, 'rowsUpdate' : 1, 'sort' : this.sort, 'asc' : this.asc})
        },
        loadingStop() {
            setTimeout(() => {
                this.loadingPage = false;
            }, 500);
        }
    }
}

</script>