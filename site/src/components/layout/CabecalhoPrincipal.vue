<template>
  <div class="cabecalho-principal-container">
    <header class="cabecalho-principal" :class="{ flutuante }">
      <TituloPrincipal tag="h1" variacao="branco" :tamanho="5">
        <img class="logo" :src="require('@/assets/img/logos/logo-minimalista.svg')"
          alt="Logo da TrimLog caminhão laranja">
        <span class="texto">TrimLog</span>
      </TituloPrincipal>

      <MenuSuspenso :responsivo="true">
        <ItemMenu href="#servicos" @click.native="closeMenu">Serviços</ItemMenu>
        <ItemMenu href="https://lp.trimlog.com.br" class="item-franquia-destaque" @click.native="closeMenu">
          Seja um Franqueado
        </ItemMenu>
        <ItemMenu href="#rastreamento" @click.native="closeMenu">Rastrear</ItemMenu>
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
  z-index: 1000;
}

.cabecalho-principal {
  background-color: rgba(19, 19, 19, 50%);
  backdrop-filter: blur(10px);
  display: grid;
  grid-template-columns: max-content auto;
  align-items: center;
  padding: 1rem 2rem;
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

.item-franquia-destaque :deep(a) {
  color: var(--destaque-claro) !important;
  font-weight: 700 !important;
  border: 1px solid var(--destaque);
  padding: 8px 16px !important;
  border-radius: 4px;
  transition: all 0.3s ease;
  background: rgba(215, 72, 2, 0.1);
}

.item-franquia-destaque :deep(a):hover {
  background: var(--destaque);
  color: var(--branco) !important;
  transform: translateY(-2px);
}

@media (max-width: 872px) {
  .logo {
    width: 100px;
  }

  .item-franquia-destaque :deep(a) {
    border: none;
    background: transparent;
    padding: 0 !important;
    color: var(--destaque) !important;
  }
}
</style>