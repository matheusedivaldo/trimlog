<template>
  <main>
    <Hero />
    <Sobre />
    <Modelo />
    <Perfil />
    <Financeiro />
    <Territorio />
    <Suporte />
    <Formulario />
    <FloatCTA />

    <footer class="footer">
      <div class="container">
        <p>&copy; {{ new Date().getFullYear() }} TrimLog - Todos os direitos reservados.</p>
      </div>
    </footer>
  </main>
</template>

<script setup>
import Hero from './components/Hero/Hero.vue'
import Sobre from './components/Sobre/Sobre.vue'
import Modelo from './components/Modelo/Modelo.vue'
import Perfil from './components/Perfil/Perfil.vue'
import Financeiro from './components/Financeiro/Financeiro.vue'
import Territorio from './components/Territorio/Territorio.vue'
import Suporte from './components/Suporte/Suporte.vue'
import Formulario from './components/Formulario/Formulario.vue'
import FloatCTA from './components/FloatCTA/FloatCTA.vue'
</script>

<style>
main {
  width: 100%;
  overflow-x: hidden;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

html {
  scroll-behavior: smooth;
}

.footer {
  background-color: var(--escuro);
  padding: 40px 0;
  border-top: 1px solid var(--escuro-destaque);
  text-align: center;
}

.footer p {
  color: var(--secundario);
  font-size: 0.9rem;
  opacity: 0.7;
  margin: 0;
}
</style>