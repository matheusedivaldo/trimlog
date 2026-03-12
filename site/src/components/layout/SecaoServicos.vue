<template>
  <ContainerSecao id="servicos" class="secao-servicos">
    <header class="servicos-header animate-up">
      <span class="tag">Soluções</span>
      <TituloPrincipal tag="h2" :tamanho="2" variacao="escuro">
        Nossos <strong>Serviços</strong>
      </TituloPrincipal>
      <p class="subtitulo">
        Soluções inteligentes e personalizadas para otimizar sua cadeia de suprimentos com total segurança.
      </p>
    </header>

    <div class="grid-servicos">
      <div v-for="(servico, index) in servicos" :key="servico.titulo" class="servico-card animate-up"
        :style="{ animationDelay: (0.2 * (index + 1)) + 's' }">
        <div class="card-icon">
          <i :class="servico.icone"></i>
        </div>
        <h3>{{ servico.titulo }}</h3>
        <p>{{ servico.descricao }}</p>
      </div>
    </div>
  </ContainerSecao>
</template>

<script>
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";

export default {
  components: {
    ContainerSecao,
    TituloPrincipal,
  },
  data() {
    return {
      servicos: [
        {
          icone: "fa-solid fa-warehouse",
          titulo: "Armazenagem",
          descricao: "Espaços modernos e seguros para proteger seus produtos com precisão e cuidado total.",
        },
        {
          icone: "fa-solid fa-gear",
          titulo: "Gestão Logística",
          descricao: "Planejamento e execução estratégica para otimizar cada detalhe da sua operação.",
        },
        {
          icone: "fa-solid fa-truck-fast",
          titulo: "Transporte B2B",
          descricao: "Frota moderna para entregas rápidas e pontuais, de pequenos volumes a grandes cargas.",
        },
        {
          icone: "fa-solid fa-building",
          titulo: "Armazéns Gerais",
          descricao: "Segurança e integridade garantidas com emissão de warrants e alto padrão operacional.",
        },
      ],
    };
  },
};
</script>

<style scoped>
.secao-servicos {
  background-color: var(--branco);
}

.servicos-header {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 50px;
}

.tag {
  color: var(--destaque);
  font-weight: 600;
  text-transform: uppercase;
  font-size: 0.85rem;
  letter-spacing: 2px;
  display: block;
  margin-bottom: 10px;
}

.subtitulo {
  color: var(--escuro-destaque);
  font-size: 1.1rem;
  line-height: 1.5;
}

.grid-servicos {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
}

.servico-card {
  background: var(--secundario);
  padding: 40px 30px;
  border-radius: 8px;
  transition: all var(--dinamico);
  border-bottom: 4px solid transparent;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.servico-card:hover {
  transform: translateY(-10px);
  background: white;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
  border-bottom-color: var(--destaque);
}

.card-icon {
  color: var(--destaque);
  font-size: 2.2rem;
  margin-bottom: 20px;
}

h3 {
  color: var(--escuro);
  font-size: 1.25rem;
  margin-bottom: 15px;
  font-weight: 700;
}

.servico-card p {
  color: var(--escuro-destaque);
  font-size: 0.95rem;
  line-height: 1.6;
  margin: 0;
}

@keyframes upIn {
  from {
    opacity: 0;
    transform: translateY(30px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-up {
  animation: upIn 0.8s ease backwards;
}

@media (max-width: 768px) {
  .servicos-header {
    margin-bottom: 40px;
  }

  .servico-card {
    padding: 30px;
    text-align: center;
  }
}
</style>