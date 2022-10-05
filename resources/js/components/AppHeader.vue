<template>
 <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Boolpress</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <router-link class="nav-link" :to="{name: 'home'}" >Home </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{name: 'about'}">About</router-link> 
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{name: 'contacts'}">Contacts</router-link>
      </li>
    </ul>
  </div>
</nav>
 </header>
</template>

<script>
   export default {
    name: "AppHeader",
    props: {
        title:String,
   }
};
</script>