<template>
  <v-container>
    <v-row>
        <v-col class='feature'>
        <h3>{{title}}</h3>
        <span>{{subTitle}}</span>
        <div>{{text1}}<br>
        {{text2}}<br>
       {{text3}}<br>
        {{text4}}<br>
       {{text5}}</div>
        </v-col>
    </v-row>



  </v-container>
</template>

<style scoped>
    .feature{
        text-align: center;
    }
</style>

<script>
export default {
   name: "IndexForm",
  props: {
    title: String,
    subTitle: String,
    text1: String,
    text2: String,
    text3: String,
    text4: String,
    text5: String,
  },
  
}
</script>