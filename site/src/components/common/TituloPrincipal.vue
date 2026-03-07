<template>
  <component :is="tag" class="titulo-principal" :class="classes">
    <slot></slot>
  </component>
</template>

<script>
export default {
  props: {
    tag: {
      type: String,
      required: true,
    },
    // classes para estilização
    tamanho: {
      default: 1,
      type: Number,
    },
    variacao: {
      default: "escuro",
      type: String,
    },
  },
  data() {
    return {
      tamanhos: [1, 2, 3, 4, 5, 6, 7],
      variacoes: ["escuro", "branco", "destaque"],
    };
  },
  computed: {
    classes() {
      try {
        if (this.tamanho && !this.tamanhos.includes(this.tamanho))
          throw `Tamanho "${this.tamanho}" inválido`;

        if (this.variacao && !this.variacoes.includes(this.variacao))
          throw `Variação "${this.variacao}" inválida`;

        return [`t${this.tamanho}`, this.variacao].map((i) =>
          i ? `-${i}` : false
        );
      } catch (e) {
        throw new TypeError(e);
      }
    },
  },
};
</script>

<style scoped>
.titulo-principal {
  font-weight: 700;
  text-transform: uppercase;
}

.titulo-principal.-destaque {
  color: var(--destaque);
}

.titulo-principal.-escuro {
  color: var(--escuro);
}

.titulo-principal.-branco {
  color: var(--branco);
}

.titulo-principal.-t1 {
  font-size: 4.25em;
}

.titulo-principal.-t2 {
  font-size: 3.75em;
}

.titulo-principal.-t3 {
  font-size: 3.25em;
}

.titulo-principal.-t4 {
  font-size: 2.75em;
}

.titulo-principal.-t5 {
  font-size: 2.5em;
}

.titulo-principal.-t6 {
  font-size: 1.75em;
}

.titulo-principal.-t7 {
  font-size: 1.5em;
}

@media (max-width: 1024px) {
  .titulo-principal.-t1 {
    font-size: calc(1em + 6vw);
  }

  .titulo-principal.-t2 {
    font-size: calc(1em + 5vw);
  }

  .titulo-principal.-t3 {
    font-size: calc(1em + 4vw);
  }

  .titulo-principal.-t4 {
    font-size: calc(1em + 3vw);
  }

  .titulo-principal.-t5 {
    font-size: calc(1em + 2vw);
  }

  .titulo-principal.-t6 {
    font-size: calc(1em + 1vw);
  }

  .titulo-principal.-t7 {
    font-size: 1em;
  }
}
</style>