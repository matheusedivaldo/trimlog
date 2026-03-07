<template>
  <ContainerSecao id="rastreamento">
    <TituloPrincipal tag="h2" :tamanho="2" variacao="escuro">
      <i class="fa-solid fa-map-location-dot"></i>
      Rastreamento
    </TituloPrincipal>
    <p>
      Nossa missão é oferecer total transparência e tranquilidade aos nossos
      clientes. Com nosso sistema de rastreamento de carga em tempo real, você
      pode acompanhar o progresso de suas remessas a qualquer hora, em qualquer
      lugar.
    </p>
    <p>
      Simplifique sua jornada logística e experimente a confiança de saber
      exatamente onde sua carga está a cada momento. Rastreie agora e tenha o
      controle em suas mãos.
    </p>

    <ContainerForm @submit.prevent="rastrear">
      <CampoTexto
        id="rastreio-cpf-cnpj"
        nome="CPF/CNPJ"
        v-model="rastreio.cpfCnpj"
      />
      <CampoTexto
        id="rastreio-codigo"
        nome="Código do Rastreio"
        v-model="rastreio.codigo"
      />

      <BotaoPrincipal @click.prevent="rastrear">Rastrear</BotaoPrincipal>
    </ContainerForm>
  </ContainerSecao>
</template>

<script>
import ContainerForm from "@/components/layout/ContainerForm.vue";
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import BotaoPrincipal from "@/components/common/BotaoPrincipal.vue";
import Swal from "sweetalert2";
import CampoTexto from "@/components/common/CampoTexto.vue";

export default {
  components: {
    ContainerSecao,
    TituloPrincipal,
    BotaoPrincipal,
    CampoTexto,
    ContainerForm,
  },
  data() {
    return {
      rastreio: {
        cpfCnpj: null,
        codigo: null,
      },
    };
  },
  methods: {
    rastrear() {
      Swal.fire(
        "Ops!",
        `Nenhum resultado encontrado para o código ${this.rastreio.codigo}.`,
        "warning"
      );
    },
  },
};
</script>

<style scoped>
.container-form {
  display: grid;
  grid-template-columns: 1.5fr 2fr 1.25fr;
  align-items: end;
}

@media (max-width: 768px) {
  .container-form {
    grid-template-columns: auto;
  }
}
</style>
