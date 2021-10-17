import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store'

import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import i18n from './locales/i18n'

//use font awesome
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import './assets/admin/js/custom'

library.add(fas)
Vue.config.productionTip = false
Vue.component('font-awesome-icon', FontAwesomeIcon)
new Vue({
    router,
    store,
    i18n,
    render: (h) => h(App)
}).$mount('#app')