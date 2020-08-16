<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="8">
          <PostCardForm/>
          <PostCardForm/>
          <PostCardForm/>
          <PostCardForm/>
      </v-col>
      <v-col cols='4'>
      <MypageCardForm/>

      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import PostCardForm from '../components/PostCardForm'
import MypageCardForm from '../components/MypageCardForm'

export default{
    name:'Top',//ここの名前は任意設定
    
    components:{
        PostCardForm,//ここの記載をtemplateで呼び出す際に使う
        MypageCardForm,//ここの記載をtemplateで呼び出す際に使う
        
    },
}



</script>