require('./bootstrap');

import Vue from 'vue'
import router from './router'
import store from './store'
import App from './App.vue'

new Vue({
  el: '#main',
  router,
  store,
  components: { App }
})
