<template>
  <div id="main-app">
    <navbar :app-name="appName"></navbar>
    <router-view></router-view>
  </div>
</template>

<script>
import './styles/app.scss'
import Navbar from './components/Navbar'

export default {
  name: 'App',
  props: ['user', 'appName'],
  components: { Navbar },
  created() {
    if (this.user) {
      const user = JSON.parse(this.user)
      this.$store.commit('SET_USER', user)
    }
  },
}
</script>
