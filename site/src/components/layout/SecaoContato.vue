<template>
  <ContainerSecao id="contato">
    <TituloPrincipal tag="h2" :tamanho="2" variacao="escuro">
      <i class="fa-solid fa-address-book"></i>
      Entre em contato
    </TituloPrincipal>

    <ContainerForm @submit="enviarContato" ref="form">
      <CampoTexto nome="Nome" name="nome" id="nome-contato" v-model="contato.nome" />
      <CampoTexto nome="E-mail" name="email" id="email-contato" v-model="contato.email" />
      <CampoTexto nome="Assunto" name="assunto" id="assunto-contato" v-model="contato.assunto" />
      <CampoTexto nome="Mensagem" name="mensagem" id="mensagem-contato" type="textarea" :rows="8"
        v-model="contato.mensagem" />
    </ContainerForm>

    <div class="grupo-botoes">
      <BotaoSecundario class="btn-limpar" @click="limpar">
        Limpar
      </BotaoSecundario>
      <BotaoPrincipal class="btn-enviar" @click="enviarContato">
        Enviar
      </BotaoPrincipal>
    </div>
  </ContainerSecao>
</template>

<script>
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import ContainerForm from "@/components/layout/ContainerForm.vue";
import CampoTexto from "@/components/common/CampoTexto.vue";
import BotaoPrincipal from "@/components/common/BotaoPrincipal.vue";
import BotaoSecundario from "@/components/common/BotaoSecundario.vue";
import Swal from "sweetalert2";

export default {
  components: {
    BotaoSecundario,
    BotaoPrincipal,
    CampoTexto,
    ContainerForm,
    ContainerSecao,
    TituloPrincipal,
  },
  data() {
    return {
      contato: {
        nome: null,
        email: null,
        assunto: null,
        mensagem: null,
      },
    };
  },
  methods: {
    async enviarContato() {
      if (Object.values(this.contato).some((valor) => !valor)) {
        Swal.fire("Atenção", "Preencha todos os campos!", "warning");
        return false;
      }

      const fetch = response => {
        const { sucesso = false, mensagem = 'Ocorreu um erro ao realizar o envio do e-mail, tente novamente mais tarde...' } = response.data;
        Swal.fire({
          title: sucesso ? "Sucesso" : "Ops!", 
          text: mensagem,
          icon: sucesso ? "success": "error"
        });
      }

      this.$http.post('/contato/enviar-email', this.contato)
        .catch(fetch)
        .then(fetch);

      this.limpar();
      return true;
    },
    limpar() {
      this.$refs.form.$emit("limpar");
    },
  },
};
</script>

<style scoped>
.grupo-botoes {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  margin-top: 1.5rem;
}

.btn-limpar {
  flex-basis: 200px;
}

.btn-enviar {
  flex-basis: 250px;
}

@media (min-width: 1024px) {
  .campo-texto:nth-child(1) {
    grid-area: nome;
  }

  .campo-texto:nth-child(2) {
    grid-area: email;
  }

  .campo-texto:nth-child(3) {
    grid-area: assunto;
  }

  .campo-texto:nth-child(4) {
    grid-area: mensagem;
  }

  .container-form {
    display: grid;
    grid-template-areas:
      "nome email email"
      "assunto assunto assunto"
      "mensagem mensagem mensagem";
  }
}

@media (max-width: 768px) {
  .grupo-botoes {
    align-items: stretch;
    flex-direction: column;
  }

  .btn-limpar {
    flex-basis: auto;
  }

  .btn-enviar {
    flex-basis: auto;
  }
}
</style>
