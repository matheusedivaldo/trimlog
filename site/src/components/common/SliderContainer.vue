<template>
  <div class="slider-container">
    <slot></slot>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.slider-container {
  display: flex;
  gap: 10px;
  overflow-x: scroll;
  padding: 1rem 0;
}
</style>
