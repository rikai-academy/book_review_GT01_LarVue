<template>
  <div id="app">
    <select v-model="language" @change="changLanguage()">
      <option value="en">EN</option>
      <option value="vn">VN</option>
    </select>
    <router-view />
  </div>
</template>

<script>
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
  }
}
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
