<template>
  <component
    :is="link ? 'a' : 'button'"
    class="botao-principal"
    @click="(e) => $emit('click', e)"
  >
    <slot></slot>
  </component>
</template>

<script>
export default {
  props: {
    link: {
      type: Boolean,
      default: false,
    },
  },
};
</script>

<style scoped>
.botao-principal {
  color: var(--branco);
  background-color: var(--destaque);
  text-decoration: none;
  font-weight: bold;
  border-radius: 0.75rem;
  display: inline-block;
  padding: 0.4rem 1.8rem;
  transition: var(--dinamico);
  border: none;
  outline: none;
}

.botao-principal:hover {
  cursor: pointer;
  transform: scale(1.01);
}
</style>
