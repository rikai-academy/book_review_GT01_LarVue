import Vue from 'vue'
import VueI18n from 'vue-i18n'

import vnMessage from './vn/VnLang'
import enMessage from './en/EnLang'

Vue.use(VueI18n)

const messages = {
  vn: vnMessage,
  en: enMessage
}

export default new VueI18n({
  locale: localStorage.getItem('lang'),
  messages,
  fallbackLocale: 'vn'
})
