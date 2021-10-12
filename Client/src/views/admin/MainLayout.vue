<template>
  <div class="wrapper">
    <Nav />
    <div class="row main-content">
      <Menu />
      <slot></slot>
      <Footer />
    </div>
  </div>
</template>

<script>
import Menu from './layout/Menu.vue'
import Footer from './layout/Footer.vue'
import Nav from './layout/Nav.vue'

export default {
  components: {
    Menu,
    Footer,
    Nav
  }
}
</script>
