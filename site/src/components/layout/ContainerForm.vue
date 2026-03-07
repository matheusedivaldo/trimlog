<template>
  <form class="container-form" @submit.prevent="(e) => $emit('submit', e)">
    <slot></slot>
  </form>
</template>

<script>
export default {
  methods: {
    limpar() {
      this.$el.reset();
    },
  },
  mounted() {
    this.$on("limpar", this.limpar);
  },
};
</script>

<style>
.container-form {
  display: flex;
  flex-direction: column;
  row-gap: 1rem;
  column-gap: 1.5rem;
  padding: 1.5rem 2rem 2rem 2rem;
  border: 1px solid var(--secundario);
  border-radius: 1.2rem;
}
</style>
