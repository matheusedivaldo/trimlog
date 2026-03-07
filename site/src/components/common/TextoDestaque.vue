<template>
  <p class="texto-destaque" :class="'-' + variacao">
    <slot></slot>
  </p>
</template>

<script>
export default {
    props: {
        variacao: {
            type: String,
            default: ''
        }
    }
};
</script>

<style scoped>
.texto-destaque {
  font-size: 2.5em;
}

.texto-destaque.-branco {
  color: var(--branco);
}
</style>