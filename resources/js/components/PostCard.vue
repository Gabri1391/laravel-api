<template>
    <div class="card bg-gray text-black mb-3">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">
                {{ post.title }}
            </h5>
            <!-- Qesto è il modo per trovare nella rotta l'id del post -->
            <router-link :to="{name: 'post-detail', params: { id: post.id} }" class="btn btn-sm btn-primary">Vedi post</router-link>
          </div>
            <h6 class="card-subtitle mb-2 text-muted">
                Pubblicato il: {{ publishedAt }}
            </h6>
            <p>
                {{ post.content }}
            </p>
        </div>
    </div>
</template>
<script>
export default {
    name: "PostCard",
    props: {
        post: Object,
    },
    computed: {
        publishedAt() {
            const postDate = new Date(this.post.created_at);
            let day = postDate.getDate();
            let month = postDate.getMonth() + 1;
            const year = postDate.getFullYear();
            if (day < 10) day = "0" + day;
            if (month < 10) month = "0" + month;
            return `${day}/${month}/${year}`
        },
    },
};
</script>