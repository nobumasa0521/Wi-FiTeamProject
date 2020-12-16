// 1.
import VueRouter from 'vue-router'
 
// 2.
import mainpage from './components/RouteComponent.vue'
import downloadpage from './components/DownloadRouteComponent.vue'
 
// 4.
const routes = [
  {
    path: '/',
    component: mainpage
  },
  {
    path: '/download',
    component: downloadpage
  }
]
 
// 5.
const router = new VueRouter({
    mode: 'history',
    routes
})
 
// 6.
export default router