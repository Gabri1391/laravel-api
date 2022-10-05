// Importo di Vue e di Vue-Router
import Vue from 'vue'
import VueRouter from 'vue-router'

// Importo dei componenti
import HomePage from './components/pages/HomePage.vue'
import ContactsPage from './components/pages/ContactsPage.vue'
import AboutPage from './components/pages/AboutPage.vue'
import NotFoundPage from './components/pages/NotFoundPage.vue'
import PostDetailPage from '/components/pages/PostDetailPage.vue'

// In questo modo Vue usa VueRouter
Vue.use(VueRouter)

// Imposto le rotte

const routes = new VueRouter({
//    Usa vue per la nostra cronologia della navigazione
   mode: 'history',
   routes: [
    {path: '/', component: HomePage, name: 'home'},
    {path: '/about', component: AboutPage, name: 'about'},
    {path: '/contacts', component: ContactsPage, name: 'contacts'},
    {path: '/posts/:id', component: PostDetailPage, name: 'post-detail'},
    {path: '*', component: NotFoundPage, name: 'not_found'}
   ]
});

export default routes;