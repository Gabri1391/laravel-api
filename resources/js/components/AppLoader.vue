<template>
    <div class="loader-overlay">
      <div class="spinner-border text-primary" role="status"></div>
    </div>
</template>
  
  <script>
  export default {
    name: "AppLoader",
  };
  </script>
  
  <style scoped lang="scss">
  .loader-overlay {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: fixed;
    z-index: 9;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    .spinner-border {
      width: 130px;
      height: 130px;
    }
  }
  </style>