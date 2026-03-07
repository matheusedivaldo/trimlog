<template>
  <div class="campo-texto">
    <label v-if="nome" :for="id">{{ nome }}</label>
    <input
      v-if="type != 'textarea'"
      type="text"
      :id="id"
      :name="name"
      v-model="valor"
    />
    <textarea
      v-else
      :id="id"
      :name="name"
      v-model="valor"
      :rows="rows"
    ></textarea>
  </div>
</template>

<script>
export default {
  props: {
    id: String,
    name: String,
    nome: String,
    value: String,
    rows: Number,
    type: {
      type: String,
      default: "text",
    },
  },
  data() {
    return {
      valor: this.value,
    };
  },
  watch: {
    valor() {
      this.$emit("input", this.valor);
    },
  },
};
</script>

<style scoped>
.campo-texto,
.campo-texto > * {
  min-width: 100%;
  max-width: 100%;
}

.campo-texto label {
  font-weight: 500;
  font-style: italic;
  margin-bottom: 0.2rem;
}
.campo-texto input,
.campo-texto textarea,
.campo-texto label {
  display: block;
}

.campo-texto input,
.campo-texto textarea {
  border-radius: 10px;
  background-color: var(--secundario);
  padding: 0.25rem 1.25rem;
  border: none;
  outline: none;
  transition: 0.1s linear;
  outline: 1px solid darkgray;
}

.campo-texto input:focus,
.campo-texto textarea:focus {
  box-shadow: 0px 0px 3px 1px var(--destaque);
  border: none;
  outline: 1px solid var(--destaque);
}
</style>
