<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <TopForm/>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import TopForm from '../components/TopCarouselForm'

export default{
    name:'Top',//ここの名前は任意設定
    
    components:{
        TopForm,//ここの記載をtemplateで呼び出す際に使う
        
    },
}



</script>