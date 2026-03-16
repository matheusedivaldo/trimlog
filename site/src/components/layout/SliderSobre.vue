<template>
  <ContainerSecao :img="require('@/assets/img/banners/1.png')">
    <div class="hero-wrapper">
      <div class="hero-content">
        <div class="hero-text-area animate-up">
          <TituloPrincipal tag="h2" :tamanho="1" variacao="destaque">
            TrimLog
          </TituloPrincipal>
          <TextoDestaque variacao="branco" class="no-break">
            A logística que sua empresa precisa.
          </TextoDestaque>

          <div class="acoes-hero">
            <BotaoPrincipal @click.native="irParaWhatsAppCliente" class="btn-franquia-pulsar">
              <i class="fab fa-whatsapp icone-botao"></i>
              Quero ser um cliente
            </BotaoPrincipal>
          </div>
        </div>

        <div class="hero-visual-area">
          <div class="floating-badge b-1 animate-combined-1 delay-1">
            <i class="fas fa-bolt"></i>
            <span>Entrega Expressa</span>
          </div>
          <div class="floating-badge b-2 animate-combined-2 delay-2">
            <i class="fas fa-check-double"></i>
            <span>100% Seguro</span>
          </div>
          <div class="floating-badge b-3 animate-combined-1 delay-3">
            <i class="fas fa-location-dot"></i>
            <span>Rastreio Ativo</span>
          </div>
          <div class="floating-badge b-4 animate-combined-2 delay-4">
            <i class="fas fa-microchip"></i>
            <span>Tecnologia Própria</span>
          </div>
          <div class="floating-badge b-5 animate-combined-1 delay-5">
            <i class="fas fa-map-location-dot"></i>
            <span>Malha Nacional</span>
          </div>
        </div>
      </div>
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
  data() {
    return {
      whatsappNumero: "5511912969307",
      mensagemCliente: "Olá! Vim pelo site da TrimLog e gostaria de solicitar uma cotação/atendimento para minha empresa."
    }
  },
  methods: {
    irParaWhatsAppCliente() {
      const url = `https://wa.me/${this.whatsappNumero}?text=${encodeURIComponent(this.mensagemCliente)}`;
      window.open(url, "_blank");
    }
  }
};
</script>

<style scoped>
.hero-wrapper {
  min-height: 80vh;
  display: flex;
  align-items: center;
  padding: 60px 0;
}

.hero-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  width: 100%;
  align-items: center;
}

.no-break {
  white-space: nowrap;
}

.hero-visual-area {
  position: relative;
  height: 450px;
  width: 100%;
}

.floating-badge {
  position: absolute;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  padding: 14px 28px;
  border-radius: 50px;
  color: var(--branco);
  display: flex;
  align-items: center;
  gap: 12px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  white-space: nowrap;
  font-weight: 600;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  z-index: 2;
}

.floating-badge i {
  color: var(--destaque-claro);
  font-size: 1.1rem;
}

.b-1 {
  top: 5%;
  right: 10%;
}

.b-2 {
  top: 25%;
  right: 25%;
}

.b-3 {
  top: 45%;
  right: 5%;
}

.b-4 {
  top: 65%;
  right: 20%;
}

.b-5 {
  top: 85%;
  right: 0%;
}

.animate-combined-1 {
  animation: entrance 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) backwards,
    floatOne 6s ease-in-out 0.8s infinite;
}

.animate-combined-2 {
  animation: entrance 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) backwards,
    floatTwo 7s ease-in-out 0.8s infinite;
}

.delay-1 {
  animation-delay: 0.2s, 1s;
}

.delay-2 {
  animation-delay: 0.4s, 1.2s;
}

.delay-3 {
  animation-delay: 0.6s, 1.4s;
}

.delay-4 {
  animation-delay: 0.8s, 1.6s;
}

.delay-5 {
  animation-delay: 1.0s, 1.8s;
}

@keyframes entrance {
  from {
    opacity: 0;
    transform: scale(0.5) translateX(50px);
  }

  to {
    opacity: 1;
    transform: scale(1) translateX(0);
  }
}

@keyframes floatOne {

  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(-15px, -10px);
  }
}

@keyframes floatTwo {

  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(15px, 10px);
  }
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
  animation: upIn 0.8s ease-out backwards;
}

.acoes-hero {
  margin-top: 2.5rem;
}

.btn-franquia-pulsar {
  background-color: var(--destaque);
  color: var(--branco);
  border: none;
  padding: 18px 35px;
  border-radius: 4px;
  font-weight: 700;
  transition: all var(--dinamico);
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
}

.btn-franquia-pulsar:hover {
  background-color: var(--destaque-claro);
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(215, 72, 2, 0.4);
}

@media (max-width: 1100px) {
  .hero-content {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .acoes-hero {
    display: flex;
    justify-content: center;
  }

  .no-break {
    white-space: normal;
  }

  .hero-visual-area {
    height: auto;
    margin-top: 50px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    position: static;
  }

  .floating-badge {
    position: static;
    animation: none !important;
    transform: none !important;
    padding: 10px 22px;
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  .hero-wrapper {
    padding: 40px 0;
  }

  .btn-franquia-pulsar {
    width: 100%;
    justify-content: center;
  }
}
</style>