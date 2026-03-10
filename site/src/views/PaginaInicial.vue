<template>
  <main id="inicio">
    <SliderSobre />
    <SecaoRastreamento />
    <SecaoServicos />
    <ParceirosIntegracoes />
    <SecaoContato />
  </main>
</template>

<script>
import SliderSobre from "@/components/layout/SliderSobre.vue";
import SecaoRastreamento from "@/components/layout/SecaoRastreamento.vue";
import SecaoServicos from "@/components/layout/SecaoServicos.vue";
import SecaoContato from "@/components/layout/SecaoContato.vue";
import ParceirosIntegracoes from "@/components/layout/ParceirosIntegracoes.vue";

export default {
  components: {
    SecaoContato,
    SliderSobre,
    SecaoRastreamento,
    SecaoServicos,
    ParceirosIntegracoes,
  },
};
</script>

<style></style>
