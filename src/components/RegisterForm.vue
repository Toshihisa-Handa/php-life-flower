<template>
  <v-card>
   <div class='title'>
    <p>新規登録</p>
     <v-spacer></v-spacer>
    <router-link active-class="current " v-bind:to="{ name: 'Login'}">
    <v-btn color="primary">
             <v-icon>←ログイン</v-icon>
    </v-btn>
   </router-link>
    </div>
    <!-- <form action="../shop/insert_act.php" method='post'>
    <v-card-text>
     <v-text-field
        v-modle="inputData.shopname"
        outlined
        label="shopname"
        prepend-inner-icon="mdi-store-outline"
      ></v-text-field>
      <v-text-field
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
        v-modle="inputData.tell"
        outlined
        type="tell"
        label="tell"
        prepend-inner-icon="mdi-phone-classic"
      ></v-text-field>
      <v-text-field
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
      <v-btn type='submit'  text>登録</v-btn>
    </v-card-actions>
    </form> -->
    <form method="post" action="../shop/insert_act.php">
<label>店舗名：<input type="text" name="shopname" class='yellow'></label><br>
     <label>代表者名<input type="text" name="name" class='yellow'></label><br>
     <label>メールアドレス<input type="text" name="email" class='yellow'></label><br>
     <label>電話番号<input type="text" name="tell" class='yellow'></label><br>
     <label>店舗住所<input type="text" name="location" class='yellow'></label><br>
     <label>パスワード<input type="text" name="pass" class='yellow'></label><br>
     <input type="submit" value="送信">
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
      shopname: "",
      name: "",
      email: "",
      tell: "",
      location: "",
      pass: "",
    },
  }),
  methods: {
    login() {
      console.log(this.inputData);
    },
  },
};
</script>