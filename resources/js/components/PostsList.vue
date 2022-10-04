<template>
    <section id="posts-list">
        <h2 class="my-3">Posts</h2>
        <div></div>
        <div v-if="posts.length">
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
        </div>
        <h5 v-else>Non ci sono posts</h5>
    </section>
</template>

<script>
import PostCard from "./PostCard.vue"
export default {
    name: "PostsList",
    data() {
        return {
            posts: [],
        };
    },
    components:{PostCard},
    methods: {
        fetchPosts() {
            axios
                .get("http://localhost:8000/api/posts")
                .then((res) => {
                    this.posts = res.data;
                })
                .catch((err) => {
                    console.error(err);
                })
                .then(() => {
                    console.log("Chiamata terminata");
                });
        },
    },
    mounted() {
        this.fetchPosts();
    },
};
</script>