<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <ProfileForm/>
      <MypostImagesForm/>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import ProfileForm from '../components/ProfileForm'
import MypostImagesForm from '../components/MypostImagesForm'

export default{
    name:'Mypage',//ここの名前は任意設定
    
    components:{
        ProfileForm,//ここの記載をtemplateで呼び出す際に使う
        MypostImagesForm,//ここの記載をtemplateで呼び出す際に使う
        
    },
}



</script>