<template>
  <v-app id="inspire">
    <component :is="layout">
      <router-view></router-view>
    </component>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  components: {
    layout: 'div',
  },
   computed: {
    layout () {
      var main_layout = 'main'
      return (this.$route.meta.layout || main_layout) + 'layout'
    }
  },
}
</script>