<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <TopForm/>
      <IndexForm/>
      <TopSlideForm/>
      <IndexForm/>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import TopForm from '../components/TopForm'
import IndexForm from '../components/IndexForm'
import TopSlideForm from '../components/TopSlideForm'

export default{
    name:'TopSlide',//ここの名前は任意設定
    
    components:{
        TopForm,//ここの記載をtemplateで呼び出す際に使う
        IndexForm,//ここの記載をtemplateで呼び出す際に使う
        TopSlideForm,//ここの記載をtemplateで呼び出す際に使う
        
    },
}



</script>