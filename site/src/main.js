import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import router from './config/router';
import http from './config/http';

Vue.use(VueRouter);
Vue.prototype.$http = http;
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router,
}).$mount('#app')
