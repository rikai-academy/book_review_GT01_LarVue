<template>
  <div class="home col-8 mx-auto py-5 mt-5">
    <h1>{{ $t("message.dashboard") }}</h1>
    <div class="card">
      <div class="card-body" v-if="user">
        <h3>{{ $t("message.hello") }}, {{ user.name }}</h3>
        <span>{{ user.email }}</span>
      </div>
       <a class="nav-item nav-link" v-if="isLoggedIn" @click.prevent="logout" href="#">{{ $t("message.logout") }}</a>
    </div>
  </div>
</template>

<script>
import User from '../../apis/User'
import { mapState } from 'vuex'

export default {
  computed: {
    ...mapState({
      user: state => state.auth.user,
      isLoggedIn: state => state.auth.user
    })
  },
  methods: {
    logout () {
      User.logout().then(() => {
        localStorage.removeItem('token')
        this.$store.commit('LOGIN', false)
        this.$router.push({ name: 'HelloWorld' })
      })
    }
  },
  mounted () {
    User.auth().then(response => {
      this.$store.commit('AUTH_USER', response.data)
    })
  }
}
</script>

<style>
.router-link-exact-active {
  color: #ffffff !important;
  transition: all 0.25s;
}
</style>
