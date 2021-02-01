<template>
  <nav class="py-6 mb-8 bg-blue-900 shadow">
    <div class="container px-6 mx-auto md:px-0">
      <div class="flex items-center justify-center">
        <div class="mr-6">
          <a href="" class="text-lg font-semibold text-gray-100 no-underline">
            {{ appName }}
          </a>
        </div>
        <div class="flex-1 text-right">
          <span class="pr-4 text-sm text-gray-300">{{ user.name }}</span>
          <a href="/logout" class="p-3 text-sm text-gray-300 no-underline hover:underline" @click.prevent="logout">Logout</a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navbar',
  props: ['appName'],
  computed: {
    user() {
      return this.$store.state.user
    }
  },
  methods: {
    async logout() {
      await window.axios.post('logout')
      delete axios.defaults.headers.common['Authorization']
      window.location.replace('/login')
    }
  }
}
</script>