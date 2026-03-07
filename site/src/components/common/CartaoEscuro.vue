<template>
  <article class="cartao-escuro">
    <div class="cabecalho">
      <span class="icone-container">
        <slot name="icone"></slot>
      </span>
      <span class="titulo-container">
        <slot name="titulo"></slot>
      </span>
    </div>
    <div class="conteudo">
      <slot name="conteudo"></slot>
    </div>
  </article>
</template>
<script>
export default {};
</script>
<style scoped>
.cartao-escuro {
  background-color: var(--escuro);
  padding: 1.5rem;
  border-radius: 10px;
  color: var(--branco);
}

.cabecalho {
  text-align: center;
}

.conteudo {
  text-align: justify;
}

.titulo-container > * {
  font-weight: bold;
  font-size: 1.5em;
}

.icone-container > * {
  font-size: 2.2em;
}
</style>
