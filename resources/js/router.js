import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './pages/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Home,
    name: 'Home'
  }
]

const router = new VueRouter({
  mode: 'history',
  base: '/app',
  routes
})

export default router
