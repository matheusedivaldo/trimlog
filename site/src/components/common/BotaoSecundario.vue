<template>
  <component
    :is="link ? 'a' : 'button'"
    class="botao-secundario"
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
.botao-secundario {
  color: var(--escuro);
  background-color: transparent;
  text-decoration: none;
  font-weight: bold;
  border-radius: 0.75rem;
  display: inline-block;
  padding: 0.4rem 1.8rem;
  transition: var(--dinamico);
  -webkit-box-shadow: inset 0px 0px 0px 2px var(--escuro);
  -moz-box-shadow: inset 0px 0px 0px 2px var(--escuro);
  box-shadow: inset 0px 0px 0px 2px var(--escuro);
  border: none;
  outline: none;
}

.botao-secundario:hover {
  cursor: pointer;
  transform: scale(1.01);
}

.botao-secundario:active,
.botao-secundario:hover,
.botao-secundario:focus {
  color: var(--branco);
  background-color: var(--escuro);
}
</style>
