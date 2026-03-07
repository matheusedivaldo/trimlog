<template>
  <footer id="rodape-principal">
    <div class="container">
      <section class="coluna">
        <img class="logo" :src="require('@/assets/img/logos/logo-clara-texto-claro.svg')"
          alt="TrimLog Transporte e Logística">
      </section>
      <section class="coluna">
        <address class="endereco">
          <a href="https://maps.app.goo.gl/hwaafM1YurNWA2yL8" target="_blank">
            <i class="fa-solid fa-location-dot"></i>
            Rua Padre Aureliano, 59, Vila Silviania, Carapicuíba, SP
          </a>
          <a href="mailto:contato@trimlog.online">
            <i class="fa-solid fa-envelope"></i>
            contato@trimlog.online
          </a>
          <a href="tel:+55 (11) 5198-0889">
            <i class="fa-solid fa-phone"></i>
            (11) 5198-0889
          </a>
        </address>
      </section>
      <section class="coluna">
        <TituloPrincipal tag="span" :tamanho="6" variacao="branco">
          <i class="fa-solid fa-briefcase"></i>
          Área do Colaborador
        </TituloPrincipal>
        <nav class="nav-colaborador">
          <ul>
            <li>
              <i class="fa-brands fa-uncharted"></i>
              &nbsp;
              <a href="https://logisticaerp.sylog.com.br/">Acesso ao Sistema</a>
            </li>
            <li>
              <i class="fa-solid fa-envelopes-bulk"></i>
              &nbsp;
              <a href="https://mailpro.uol.com.br/trim.online">E-mail</a>
            </li>
          </ul>
        </nav>
      </section>
    </div>
    <p class="copyright">
      Copyright &copy; 2026 - TrimLog - Todos os direitos reservados.
    </p>

  </footer>
</template>

<script>
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
export default {
  components: {
    TituloPrincipal
  }
};
</script>

<style scoped>
#rodape-principal {
  background-color: var(--escuro);
  color: var(--branco);
  padding: 3rem 1rem;
  font-size: 0.8em;
}

#rodape-principal a {
  color: var(--branco);
  text-decoration: none;
  font-weight: 600;
  margin-bottom: 1rem;
}

.endereco a:nth-child(1) {
  display: block;
  flex-direction: column;
}

.endereco a:nth-child(n+2) {
  display: inline-block;
  margin-left: 1rem;
  margin-right: 1rem;
}

.endereco,
.copyright {
  text-align: center;
}

.copyright {
  margin-top: 3rem;
}

.container {
  display: grid;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
  grid-template-columns: 1fr 1fr 1fr;
}

.container .coluna:nth-child(3) {
  align-self: start;
  text-align: end;
}

.logo {
  width: 150px;
}

.coluna {
  padding: 1rem 2rem;
}

.nav-colaborador {
  margin-top: 0.75rem;
}

.nav-colaborador ul li {
  margin-top: 0.5rem;
  padding-left: 1.5rem;
}

@media (max-width: 1024px) {
  .container {
    grid-template-columns: 1fr 1fr;
    grid-template-areas: "c1 c2" "c3 c3";
  }

  .coluna:nth-child(1) {
    grid-area: c1;
  }

  .coluna:nth-child(3) {
    grid-area: c2;
  }

  .coluna:nth-child(2) {
    grid-area: c3;
  }

  .copyright {
    margin-top: 1rem;
  }
}

@media (max-width: 628px) {
  .container {
    grid-template-columns: 1fr;
    grid-template-areas: "c1" "c2" "c3";
    justify-content: center;
  }

  .container .coluna:nth-child(3) {
    text-align: center;
  }

  .coluna {
    text-align: center;
    border-bottom: 1px solid var(--escuro-destaque);
    padding: 2.5rem 0;
  }
}
</style>
