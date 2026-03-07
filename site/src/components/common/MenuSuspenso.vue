<template>
    <nav class="navegacao" ref="nav" :class="{ responsivo }">
      <span ref="togglerMenu" class="toggler" @click="toggleMenu">
        <i v-if="!customToggler" :class="menuAberto ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
        <slot name="toggler"></slot>
      </span>
      <ul class="menu" ref="menu" :class="{ aberto: menuAberto }" @click.stop>
        <slot></slot>
      </ul>
    </nav>
  </template>
  
  <script>
  export default {
    props: {
      customToggler: {
        type: Boolean,
        default: false
      },
      responsivo: {
        type: Boolean,
        default: false
      }
    },
    data() {
      return {
        menuAberto: false
      };
    },
    methods: {
      toggleMenu() {
        this.menuAberto = !this.menuAberto;
      },
      closeMenu() {
        this.menuAberto = false;
      },
      handleDocumentClick(e) {
        if (!this.$refs.nav.contains(e.target)) {
          this.closeMenu();
        }
      }
    },
    mounted() {
      document.addEventListener("click", this.handleDocumentClick);
    },
    beforeDestroy() {
      document.removeEventListener("click", this.handleDocumentClick);
    }
  };
  </script>
  
  <style scoped>
  .navegacao {
    margin-left: auto;
  }
  
  .link {
    text-decoration: none;
    font-weight: bold;
    font-size: 1em;
    color: var(--branco);
    transition: var(--dinamico);
  }
  
  .link:hover {
    color: var(--destaque);
  }
  
  .menu {
    display: flex;
    height: 100%;
    align-items: center;
    gap: 1rem;
  }
  
  .toggler {
    background: none;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1.6rem;
    color: var(--branco);
  }
  
  .responsivo > .toggler {
    display: none;
  }
  
  :not(.responsivo) > .menu {
    display: none;
  }
  
  :not(.responsivo) > .menu.aberto {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 120%;
    width: max-content;
    height: max-content;
    background-color: var(--preto-50);
    padding: 1rem;
    border-radius: 5px;
  }
  
  :not(.responsivo) > .navegacao {
    display: flex;
    align-items: flex-end;
    justify-content: center;
    flex-direction: column;
    text-align: right;
    position: relative;
  }
  
  @media (max-width: 872px) {
    .responsivo .navegacao {
      display: flex;
      align-items: flex-end;
      justify-content: center;
      flex-direction: column;
      text-align: right;
      position: relative;
    }
  
    .responsivo > .menu {
      display: none;
    }
  
    .responsivo > .menu.aberto {
      display: flex;
      flex-direction: column;
      position: absolute;
      top: 120%;
      width: max-content;
      height: max-content;
      background-color: var(--preto-50);
      padding: 1rem;
      border-radius: 5px;
    }
  
    .responsivo > .toggler {
      display: block;
      margin-left: auto;
    }
  }
  </style>
  