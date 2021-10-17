<template>
  <div id="app">
    <select v-model="language" @change="changLanguage()">
      <option value="en">EN</option>
      <option value="vn">VN</option>
    </select>
    <component :is="layout">
      <router-view />
    </component>
  </div>
</template>

<script>
// import * as custom from './assets/admin/js/custom'
// import * as sweeta from './assets/admin/js/sweetalert'
// import * as progressbar from './assets/admin/js/progressbar.min.js'
// import * as popper from './assets/admin/js/popper.min.js'
// import * as niceSelect from './assets/admin/js/jquery.nice-select.min.js'
// import * as jquery from './assets/admin/js/jquery.min.js'
export default {
  name: 'App',
  data () {
    return {
      language: null
    }
  },
  methods: {
    changLanguage () {
      localStorage.setItem('lang', this.language)
      window.location.reload()
    },
    created () {
      if (localStorage.getItem('lang') == null) {
        localStorage.setItem('lang', 'vn')
      }
      this.language = localStorage.getItem('lang')
    }
  },
  computed: {
    layout () {
      var default_layout = 'default'
      return (this.$route.meta.layout || default_layout) + 'layout'
    }
  },
  // components: {
  //   custom,
  //   sweeta,
  //   progressbar,
  //   popper,
  //   niceSelect,
  //   jquery

  // }
}
</script>

<style>
@import './assets/admin/css/animate.min.css';
@import './assets/admin/css/bootstrap.min.css';
@import './assets/admin/css/nice-select.css';
@import './assets/admin/css/style.css';
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
