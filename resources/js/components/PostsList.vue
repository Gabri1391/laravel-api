<template>
    <section id="posts-list">
        <h2 class="mb-3">Posts</h2>
        <ul v-if="posts.lenght">
            <li v-for="post in posts" :key="post.id">
                {{post.title}}
            </li>
        </ul>
        <h6 v-else>Nessun post disponibile</h6>
    </section>
</template>

<script>
export default {
    name: "PostsList",
    data(){
        return{
          posts: [],
        };
    },
    methods:{
       fetchPosts(){
         axios.get("http://localhost:8000/api/posts")
         .then((res) => {
            console.log(res.data);
         })
         .catch((err) => {
          console.error(err)
         });
       }
    },
    mounted(){
        this.fetchPosts();
    }
}
</script>