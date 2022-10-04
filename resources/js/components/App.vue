<template>
       <div class="content">
         <AppHeader :title="title" />
          <main class="container mt-5">
           <PostsList/>
          </main>
       </div>
</template>

<script>
    import AppHeader from "./AppHeader.vue"
    import PostsList from "./PostsList.vue"
    export default {
        name:"App",
        components:{
            AppHeader,
            PostsList,
        },
        data(){
            return{
                title: 'Boolpress'
            };
        }
    }
</script>