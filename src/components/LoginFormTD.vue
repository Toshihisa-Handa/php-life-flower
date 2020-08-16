<template>
  <v-card>
   <div class='title'>
    <p>ログイン</p>
     <v-spacer></v-spacer>
     <router-link active-class="current " v-bind:to="{ name: 'Register'}">
    <v-btn color="green">
             <v-icon>新規登録→</v-icon>
    </v-btn>
   </router-link>

    </div>
    <form action="">
    <v-card-text>
     <v-text-field
        v-modle="inputData.email"
        outlined
        label="email"
        prepend-inner-icon="mdi-email-outline"
      ></v-text-field>
      <v-text-field
        v-modle="inputData.password"
        outlined
        type="password"
        label="password"
        prepend-inner-icon="mdi-lock-outline"
      ></v-text-field>
    </v-card-text>
    <v-card-actions>
      <v-spacer></v-spacer>
      <v-btn type='submit' @click='login' text>ログインする</v-btn>
    </v-card-actions>
    </form>
  </v-card>
</template>

<style scoped>
  .title{
    display:flex;
  }
</style>



<script>
export default {
  name: "LoginForm",
  data: () => ({
    inputData: {
      email: "",
      password: "",
    },
  }),
  methods: {
    login() {
      console.log(this.inputData);
    },

  },
};
</script>

