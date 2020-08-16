<template>
  <div fixed-header height="300px">
    <v-app-bar
      color="white"
      dense
      light
      
    >

      <h3>Life Flower</h3>
      <v-spacer></v-spacer>

     <router-link active-class="current " v-bind:to="{ name: 'TopPage'}">
      <v-btn icon>
        <v-icon class=''>mdi-home</v-icon>
      </v-btn>
     </router-link>

     <router-link active-class="current " v-bind:to="{ name: 'Mypage'}">
      <v-btn icon>
        <v-icon class=''>mdi-storefront-outline</v-icon>
      </v-btn>
     </router-link>

     <router-link active-class="current " v-bind:to="{ name: 'PostList'}">
      <v-btn icon>
        <v-icon class=''>mdi-file-document-outline</v-icon>
      </v-btn>
     </router-link>

      <router-link active-class="current" v-bind:to="{ name: 'Login'}">
      <v-btn icon>
        <v-icon>mdi-login</v-icon>
      </v-btn>
     </router-link>

    </v-app-bar>
  </div>
  
</template>

<style scoped>

h3{
  color:black;
}

a {
  text-decoration: none;
}
.current .v-btn--icon .v-icon {
  color: #d583b4;
}
</style>