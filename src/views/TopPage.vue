<template>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="12">
      <TopForm/>
      <IndexForm
       title= "本サイトについて"
    subTitle= "FEATURE"
    text1= "外出自粛が広く実施される昨今"
    text2= "「Life Flower」は、改めて家庭で花を楽しむ体験を提案します"
    text3= " 皆さんの生活に彩りを添える花を１輪飾ってみませんか。"
    text4= "あなたの街の素敵なお花屋さんと花々を楽しむ体験を"
    text5= "私たちは提案します。"
      
      
      
      />
      <TopSlideForm/>
      <IndexForm
        :title= "test[0].title"
    :subTitle= "test[0].subTitle"
    :text1= "test[0].text1"
    :text2= "test[0].text2"
    :text3= "test[0].text3"
    :text4= "test[0].text4"
    :text5= "test[0].text5"
      />
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
  data: () => {
    return {      
      test: [
        { title: '使い方',
         subTitle: 'あなたのお気に入りのお店をみつけよう',
          text1: '現在地や任意の場所を指定して',
          text2: '検索をスタート', 
          text3: 'あなたの街の素敵なお店が見つかります。', 
          text4: '気に入ったお店をフォローして', 
          text5: '毎日投稿をチェックしましょう', },
          //参考サイト：https://mebee.info/2020/02/24/post-5009/
      ],
    };
  },
   
         
 
      
    
}



</script>