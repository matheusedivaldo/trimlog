<template>
  <ContainerSecao :img="require('@/assets/img/banners/1.png')">
    <TituloPrincipal tag="h2" :tamanho="1" variacao="destaque">
      TrimLog
    </TituloPrincipal>
    <TextoDestaque variacao="branco">
      A logística que sua empresa precisa.
    </TextoDestaque>

    <div class="acoes-hero">
      <BotaoPrincipal @click.native="irParaFranquia" class="btn-franquia-pulsar">
        <i class="fas fa-rocket icone-botao"></i>
        Quero ser um franqueado
      </BotaoPrincipal>
    </div>
  </ContainerSecao>
</template>

<script>
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import TextoDestaque from "@/components/common/TextoDestaque.vue";
import BotaoPrincipal from "@/components/common/BotaoPrincipal.vue";

export default {
  components: {
    ContainerSecao,
    TituloPrincipal,
    TextoDestaque,
    BotaoPrincipal,
  },
  methods: {
    irParaFranquia() {
      window.open("https://lp.trimlog.com.br", "_blank");
    }
  }
};
</script>

<style scoped>
.acoes-hero {
  margin-top: 2.5rem;
}

.icone-botao {
  margin-right: 10px;
}

.btn-franquia-pulsar {
  position: relative;
  background-color: var(--destaque);
  color: var(--branco);
  border: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--dinamico), background-color var(--dinamico);
  animation: pulsar-brilho 2s infinite;
}

.btn-franquia-pulsar:hover {
  background-color: var(--destaque-claro);
  transform: scale(1.05);
  animation-play-state: paused;
}

@keyframes pulsar-brilho {
  0% {
    box-shadow: 0 0 0 0 rgba(215, 72, 2, 0.7);
    transform: scale(1);
  }

  70% {
    box-shadow: 0 0 0 15px rgba(255, 128, 0, 0);
    transform: scale(1.03);
  }

  100% {
    box-shadow: 0 0 0 0 rgba(215, 72, 2, 0);
    transform: scale(1);
  }
}
</style>