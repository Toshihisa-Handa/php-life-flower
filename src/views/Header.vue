<template>
  <v-container class='header-container'> 
    <v-row  justify="center" align="center">
      <v-col cols="12" class='header-row'>
      <HeaderForm/>
      </v-col>
    </v-row>
  </v-container >
</template>
<style scoped>
  .header-container{
    padding-bottom:0;
  }
  .header-row{
    padding-bottom:0;
  }
</style>



<script>
import HeaderForm from '../components/HeaderForm'

export default{
    name:'Header',//ここの名前は任意設定
    
    components:{
        HeaderForm,//ここの記載をtemplateで呼び出す際に使う
    },
}



</script>
