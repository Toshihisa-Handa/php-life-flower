import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

  const routes = [
 
  
  
  {
    path: '/toppage',
    name: 'TopPage',
    // route level code-splitting
    // this generates a separate chunk (Top.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "Top" */ '../views/TopPage.vue')
  },

  {
    path: '/postlist',
    name: 'PostList',
    // route level code-splitting
    // this generates a separate chunk (TopCarousel.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "TopCarousel" */ '../views/PostList.vue')
  },
  {
    path: '/mypage',
    name: 'Mypage',
    // route level code-splitting
    // this generates a separate chunk (TopCarousel.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "TopCarousel" */ '../views/Mypage.vue')
  },
  {
    path: '/login',
    name: 'Login',
    // route level code-splitting
    // this generates a separate chunk (TopCarousel.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "TopCarousel" */ '../views/Login.vue')
  },
  
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
