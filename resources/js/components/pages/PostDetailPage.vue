<template>
  <div id="post-detail-page">
    Dettagli post
    <AppLoader v-if="isLoading" />
    <PostCard v-else-if="!isLoading && post" :post="post" />
  </div>
</template>

<script>
import AppLoader from "../AppLoader.vue";
import PostCard from '../PostCard.vue'
import Axios from 'axios';

export default {
name: "PostDetailPage",
components:{
    PostCard,
    AppLoader
},
data(){
    return{
        post: null,
        isLoading:false
    }
},
methods:{
    fetchPost(){
        this.isLoading = true;
        Axios.get("http://localhost:8000/api/posts/" + this.$route.params.id )
        .then((res)=>{
            this.post = res.data;
        }).catch((err)=>{
            console.error(err)
        }).then(()=>{
            console.log('Chiamata terminata')
            this.isLoading = false;
        });
    }
},
mounted(){
    this.fetchPost();
}
}
</script>

<style>

</style>