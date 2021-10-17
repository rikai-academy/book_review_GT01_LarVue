<template>
  <v-navigation-drawer v-model="drawer" app>
    <v-img src="@/assets/images/back.jpg" class="pa-4">
      <div class="text-center">
        <v-avatar class="mb-4" color="grey darken-1" size="64">
          <v-img aspect-ratio="30" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe5PABjXc17cjIMOibECLM7ppDwMmiDg6Dw&usqp=CAU"></v-img>
        </v-avatar>
        <h4 class="white--text">ADMIN PANEL</h4>
      </div>
    </v-img>
    <v-divider></v-divider>
    <v-list>
      <v-list-item v-for="linkTo in links" :key="linkTo.name" :to="linkTo.link" link>
        <v-list-item-icon>
          <v-icon>{{ linkTo.icon }}</v-icon>
        </v-list-item-icon>
        <v-list-item-content>
          <v-list-item-title>{{  linkTo.name }}</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>
<script>
export default {
  props: ['drawer'],
  data () {
    return {
      links: [
        {
          icon: 'mdi-microsoft-windows', name: 'Dashboard', link: '/'
        },
        {
          icon: 'mdi-account-box-multiple', name: 'Profile', link: '/book'
        },
        {
          icon: 'mdi-clipboard-list-outline', name: 'Product', link: '/home'
        },
        {
          icon: 'mdi-clipboard-list', name: 'Order', link: '/home'
        },
        {
          icon: 'mdi-account-cog', name: 'System Setting', link: '/home'
        },
      ],
      image:[
        {
          
        }
      ]
    }
  }
}
</script>