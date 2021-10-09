import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Login from '@/views/auth/Login'
import Dashboard from '@/views/auth/Dashboard'
import Register from '@/views/auth/Register'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/dashboard',
      name: 'Dashboard',
      component: Dashboard,
      meta: { authOnly: true }
    },
    {
      path: '/register',
      name: 'Register',
      component: Register,
      meta: { guestOnly: true }
    }
  ]
})
