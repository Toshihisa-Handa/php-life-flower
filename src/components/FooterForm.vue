<template>
  <v-footer
    color="yellow lighten-5"
    padless
    
  >
    <v-row
      justify="center"
      no-gutters
    >
      <v-btn
        v-for="link in links"
        :key="link"
        color="#212121"
        text
        rounded
        class="my-2"
      >
        {{ link }}
      </v-btn>
      <v-col
        class="yellow lighten-2 py-4 text-center #212121 "
        cols="12"
      >
        {{ new Date().getFullYear() }} — <strong class='#212121'>Vuetify</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>



<script>
  export default {
    data: () => ({
      links: [
        'Home',
        'About Us',
        'Team',
        'Services',
        'Blog',
        'Contact Us',
      ],
    }),
  }
</script>