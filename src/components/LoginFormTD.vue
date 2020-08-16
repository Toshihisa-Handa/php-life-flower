<template>
  <v-card>
     <v-card-title>{{formTitle}}
      <v-spacer></v-spacer>
    <v-switch v-model="isSignup" :label="signup"></v-switch>

    </v-card-title>
     <!-- <router-link active-class="current " v-bind:to="{ name: 'Register'}">
    <v-btn color="green">
             <v-icon>新規登録→</v-icon>
    </v-btn>
   </router-link> -->

     <!-- <form action="#" method='post'> -->
    <v-card-text>
     <v-text-field
        v-if='isSignup'
        v-modle="inputData.shopname"
        outlined
        label="shopname"
        prepend-inner-icon="mdi-store-outline"
      ></v-text-field>
      <v-text-field
        v-if='isSignup'
        v-modle="inputData.name"
        outlined
        type="name"
        label="name"
        prepend-inner-icon="mdi-account"
      ></v-text-field>
      <v-text-field
        v-modle="inputData.email"
        outlined
        type="email"
        label="email"
        prepend-inner-icon="mdi-email-outline"
      ></v-text-field>
      <v-text-field
        v-if='isSignup'
        v-modle="inputData.tell"
        outlined
        type="tell"
        label="tell"
        prepend-inner-icon="mdi-phone-classic"
      ></v-text-field>
      <v-text-field
        v-if='isSignup'
        v-modle="inputData.location"
        outlined
        type="location"
        label="location"
        prepend-inner-icon="mdi-map-marker"
      ></v-text-field>
      <v-text-field
        v-modle="inputData.pass"
        outlined
        type="pass"
        label="pass"
        prepend-inner-icon="mdi-lock-outline"
      ></v-text-field>
    </v-card-text>
    <v-card-actions>
      <v-spacer></v-spacer>
      <v-btn type='submit' @click='sendAuth' text>{{btntxt}}</v-btn>
    </v-card-actions>
    <!-- </form> -->
   
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
    isSignup:false,
    inputData: {
      email: "",
      password: "",
    },
  }),
  computed:{
   formTitle(){
      return this.isSignup == true ? "サインアップ" : "ログイン"
   },
   btntxt(){
     return this.isSignup == true ? "新規登録する" : "ログインする"
   }
  },
  methods: {
    sendAuth() {
      console.log(this.inputData);
      if(this.isSignup==true){
        //新規登録時の処理
       this._singup()
      }else{
        //ログイン時の処理
       this._login()
      }
    },
    _singup(){
      console.log('新規登録')
    },
    _login(){
      console.log('ログイン')
    }

  },
};
</script>

