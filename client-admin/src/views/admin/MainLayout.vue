<template>
  <div class="MainLayout">
    <Header @handeDrawer="drawer =!drawer" />
    <Sidebar :drawer="drawer" />
    <v-main>
      <v-container class="py-8 px-6" fluid>
        <slot />
      </v-container>
    </v-main>
  </div>
</template>

<script>
import Header from '../admin/layout/Header.vue'
import Sidebar from '../admin/layout/Sidebar.vue'
export default {
  name: `MainLayout`,
  components: {
    Header,
    Sidebar
  },
  data: () => ({
    // cards: ['Today', 'Yesterday'],
    drawer: true,
  }),
}
</script>