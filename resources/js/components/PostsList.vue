<template>
    <section id="posts-list">
        <h2 class="mb-3">Posts</h2>
        <ul v-if="posts.length">
            <li class="mt-5 list-unstyled" v-for="post in posts" :key="post.id">
                <h3>{{post.title}}</h3>
                <p>{{post.content}}</p>
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
            this.posts = res.data;
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