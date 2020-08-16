<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <LoginFormTD/>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import LoginFormTD from '../components/LoginFormTD'

export default{
    name:'Login',//ここの名前は任意設定
    
    components:{
        LoginFormTD,//ここの記載をtemplateで呼び出す際に使う
        
    },
}



</script>