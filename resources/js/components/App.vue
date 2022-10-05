<template>
       <div class="content">
         <AppHeader :title="title" />
          <main class="container mt-5">
           <HomePage />
          </main>
       </div>
</template>

<script>
    import AppHeader from "./AppHeader.vue"
    import HomePage from "./pages/HomePage.vue"
    export default {
        name:"App",
        components:{
            AppHeader,
            HomePage,
        },
        data(){
            return{
                title: 'Boolpress'
            };
        }
    }
</script>