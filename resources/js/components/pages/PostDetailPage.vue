<template>
  <div id="post-detail-page">
    Dettagli post
    <PostCard :post="post" />
  </div>
</template>

<script>
import PostCard from '../PostCard.vue'
import Axios from 'axios';

export default {
name: "PostDetailPage",
components:{
    PostCard,
},
data(){
    return{
        post: null
    }
},
methods:{
    fetchPost(){
        Axios.get("http://localhost:8000/posts/1")
        .then((res)=>{
            this.post = res.data;
        }).catch((err)=>{
            console.error(err)
        }).then(()=>{
            console.log('Chiamata terminata')
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