<template>
  <v-carousel hide-delimiters>
    <v-carousel-item
      v-for="(item,i) in items"
      :key="i"
      :src="item.src"
    ></v-carousel-item>
 

  </v-carousel>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          {
            src:"https://images.unsplash.com/photo-1487070183336-b863922373d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
          },
          {
            src: 'https://images.unsplash.com/photo-1529059867660-302e870b0438?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80',
          },
          {
            src: 'https://images.unsplash.com/photo-1560243563-62087d88da39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
          },
         
        ],
      }
    },
  }
</script>