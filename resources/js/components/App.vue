<template>
       <div class="content">
         <AppHeader :title="title" />
          <main class="container mt-5">

          </main>
       </div>
</template>

<script>
    import AppHeader from "./AppHeader.vue"
    export default {
        name:"App",
        components:{
            AppHeader,
        },
        data(){
            return{
                title: 'Boolpress'
            };
        }
    }
</script>