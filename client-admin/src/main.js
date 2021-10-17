import Vue from "vue";
import App from "./App.vue";
import vuetify from "./plugins/vuetify";
import router from "./router";

import MainLayout from './views/admin/MainLayout.vue'
Vue.config.productionTip = false;

Vue.component('main-layout', MainLayout)
new Vue({
    vuetify,
    router,
    render: (h) => h(App),
}).$mount("#app");