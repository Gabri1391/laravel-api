<template>
   <section id="posts-list">
    <h2 class="my-3">Posts</h2>
    <AppLoader v-if="isLoading" />
    <div v-else>
      <div v-if="posts.length">
        <PostCard v-for="post in posts" :key="post.id" :post="post" />
      </div>
      <h5 v-else>Non ci sono posts</h5>
    </div>
  </section>
</template>

<script>
import AppLoader from "./AppLoader.vue";
import PostCard from "./PostCard.vue"
export default {
    name: "PostsList",
  data() {
    return {
      posts: [],
      isLoading: false,
    };
  },
  components:{ 
    PostCard, 
    AppLoader 
  },
  methods: {
    fetchPosts() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/posts")
        .then((res) => {
          this.posts = res.data;
        })
        .catch((err) => {
          console.error(err);
        }).then(() => {
          this.isLoading = false;
        })
    },
  },
  mounted() {
    this.fetchPosts();
  },
};
</script>