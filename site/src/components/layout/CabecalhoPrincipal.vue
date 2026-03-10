<template>
  <div class="cabecalho-principal-container">
    <header class="cabecalho-principal" :class="{ flutuante }">
      <TituloPrincipal tag="h1" variacao="branco" :tamanho="5">
        <img class="logo" :src="require('@/assets/img/logos/logo-minimalista.svg')"
          alt="Logo da TrimLog caminhão laranja">
        <span class="texto">TrimLog</span>
      </TituloPrincipal>
      <MenuSuspenso :responsivo="true">
        <ItemMenu href="#rastreamento" @click.native="closeMenu">Rastrear</ItemMenu>
        <ItemMenu href="#servicos" @click.native="closeMenu">Serviços</ItemMenu>
        <ItemMenu href="https://lp.trimlog.com.br" @click.native="closeMenu">Franquias</ItemMenu>
        <ItemMenu href="#contato" @click.native="closeMenu">Contato</ItemMenu>
        <ItemMenu :custom="true">
          <MenuSuspenso :custom-toggler="true">
            <BotaoPrincipal slot="toggler">Acesso</BotaoPrincipal>
            <template>
              <ItemMenu href="https://logisticaerp.sylog.com.br/" @click.native="closeMenu">Colaborador</ItemMenu>
              <ItemMenu href="#cliente" @click.native="closeMenu">Cliente</ItemMenu>
            </template>
          </MenuSuspenso>
        </ItemMenu>
      </MenuSuspenso>
    </header>
  </div>
</template>

<script>
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import MenuSuspenso from "@/components/common/MenuSuspenso.vue";
import ItemMenu from "@/components/common/ItemMenu.vue";
import BotaoPrincipal from "@/components/common/BotaoPrincipal.vue";

export default {
  props: {
    flutuante: Boolean,
  },
  components: {
    BotaoPrincipal,
    ItemMenu,
    MenuSuspenso,
    TituloPrincipal,
  },
};
</script>

<style scoped>
.cabecalho-principal-container {
  position: relative;
}

.cabecalho-principal {
  background-color: rgba(19, 19, 19, 50%);
  display: grid;
  grid-template-columns: max-content auto;
  padding: 1.5rem;
}

.cabecalho-principal.flutuante {
  position: absolute;
  width: 100%;
}

.logo {
  width: 125px;
  vertical-align: middle;
}

.texto {
  display: none;
}

@media (max-width: 872px) {
  .logo {
    width: 100px;
  }
}
</style>
