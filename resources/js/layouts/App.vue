<template>
    <div
        id="page-container"
        v-bind:class="{
            'sidebar-o side-scroll page-header-fixed sidebar-dark enable-page-overlay wrapper': isAuth
        }"
    >
        <app-sidemenu v-if="isAuth" />

        <app-header v-if="isAuth" />

        <!-- Main Container -->
        <main id="main-container">
            <router-view></router-view>
        </main>
        <!-- END Main Container -->

        <app-footer v-if="isAuth" />
    </div>
</template>

<script>
import Header from "./Header.vue";
import Sidebar from "./Sidebar.vue";
import Footer from "./Footer.vue";
import { mapState, mapGetters } from "vuex";

export default {
    computed: {
        ...mapState(["token"]),
        ...mapGetters(["isAuth"])
    },
    components: {
        "app-header": Header,
        "app-sidemenu": Sidebar,
        "app-footer": Footer
    }
};
</script>
