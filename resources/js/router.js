// Importo di Vue e di Vue-Router
import Vue from 'vue'
import VueRouter from 'vue-router'

// Importo dei componenti
import HomePage from './components/pages/HomePage.vue'
import ContactsPage from './components/pages/ContactsPage.vue'
import AboutPage from './components/pages/AboutPage.vue'

// In questo modo Vue usa VueRouter
Vue.use(VueRouter)

// Imposto le rotte

const routes = new VueRouter({
//    Usa vue per la nostra cronologia della navigazione
   mode: 'history',
   routes: [
    {path: '/', component: HomePage},
    {path: '/contacts', component: ContactsPage},
    {path: '/about', component: AboutPage},
   ]
});

export default routes;