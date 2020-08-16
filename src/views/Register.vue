<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <RegisterForm/>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import RegisterForm from '../components/RegisterForm'

export default{
    name:'Register',//ここの名前は任意設定
    
    components:{
        RegisterForm,//ここの記載をtemplateで呼び出す際に使う
        
    },
}



</script>