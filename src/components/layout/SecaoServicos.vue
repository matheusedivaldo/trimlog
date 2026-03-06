<template>
  <ContainerSecao id="servicos" :img="require('@/assets/img/banners/2.png')">
    <TituloPrincipal tag="h2" :tamanho="2" variacao="branco">
      <i class="fa-solid fa-handshake"></i>
      Serviços
    </TituloPrincipal>

    <p>
      Na <strong>TrimLog</strong>, entendemos a importância de armazenar e
      transportar suas mercadorias com eficiência e segurança. Somos
      especialistas em oferecer soluções abrangentes para todas as suas
      necessidades logísticas, desde armazenamento até entrega rápida. Aqui está
      um vislumbre dos serviços que oferecemos:
    </p>

    <div class="grid-servicos">
      <CartaoEscuro v-for="servico in servicos" :key="servico.titulo">
        <i slot="icone" :class="servico.icone"></i>
        <h3 slot="titulo">{{ servico.titulo }}</h3>
        <p slot="conteudo">{{ servico.descricao }}</p>
      </CartaoEscuro>
    </div>
  </ContainerSecao>
</template>

<script>
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import CartaoEscuro from "@/components/common/CartaoEscuro.vue";

export default {
  components: {
    CartaoEscuro,
    ContainerSecao,
    TituloPrincipal,
  },
  data() {
    return {
      servicos: [
        {
          icone: "fa-solid fa-warehouse",
          titulo: "Armazenagem Especializada",
          descricao:
            "Confie em nós para armazenar suas mercadorias com cuidado e precisão. Nossos depósitos de mercadorias são espaços seguros e modernos, prontos para receber e proteger seus produtos.",
        },
        {
          icone: "fa-solid fa-gear",
          titulo: "Logística Eficiente e Personalizada",
          descricao:
            "Nossa equipe especializada em organização logística trabalha em estreita colaboração com você para garantir que sua cadeia de suprimentos funcione perfeitamente. Do planejamento à execução, estamos aqui para otimizar cada detalhe do seu processo logístico.",
        },
        {
          icone: "fa-solid fa-truck-fast",
          titulo: "Transporte Rodoviário Confiável",
          descricao:
            "Nossa frota de veículos modernos e equipe experiente garantem que suas cargas sejam entregues com segurança e pontualidade, onde quer que precise. De pequenas encomendas a cargas volumosas, estamos preparados para atender às suas necessidades de transporte.",
        },
        {
          icone: "fa-solid fa-building",
          titulo: "Armazéns Gerais de Alto Padrão",
          descricao:
            "Como emissários de warrants confiáveis, oferecemos serviços de armazenagem que garantem a segurança e a integridade de suas mercadorias. Nosso compromisso com a qualidade se reflete em cada aspecto de nossas operações.",
        },
      ],
    };
  },
};
</script>

<style scoped>
#servicos {
  color: var(--branco);
}

.grid-servicos {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.grid-servicos .cartao-escuro {
  max-width: 330px;
}
</style>
