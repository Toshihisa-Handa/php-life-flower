<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <FooterForm/>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import FooterForm from '../components/FooterForm'

export default{
    name:'Header',//ここの名前は任意設定
    
    components:{
        FooterForm,//ここの記載をtemplateで呼び出す際に使う
    },
}



</script>