<template>
  <ContainerSecao :img="require('@/assets/img/banners/1.png')">
    <TituloPrincipal tag="h2" :tamanho="1" variacao="destaque">
      TrimLog
    </TituloPrincipal>
    <TextoDestaque variacao="branco">
      A logística que sua empresa precisa.
    </TextoDestaque>
  </ContainerSecao>
</template>

<script>
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import TextoDestaque from "@/components/common/TextoDestaque.vue";
export default {
  components: {
    ContainerSecao,
    TituloPrincipal,
    TextoDestaque,
  },
};
</script>

<style></style>
