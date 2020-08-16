<template>
  <v-app>
   <Header/>
    <router-view/>
   <!-- <Top/>
   <Index/>
   <TopSlide/> -->
   <Footer/>
  </v-app>
</template>
<style scoped>
  v-container{
    padding-bottom: 0;
  }
</style>

<script>
import Header from './views/Header';
import Footer from './views/Footer';
// import Top from './views/Top';
// import Index from './views/Index';
// import TopSlide from './views/TopSlide';

export default {
  name: 'App',

  components: {
    Header,
    Footer,
    // Top,
    // Index,
    // TopSlide,
  },

  data: () => ({
    //
  }),
};
</script>
