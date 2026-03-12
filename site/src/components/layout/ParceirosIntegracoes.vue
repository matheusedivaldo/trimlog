<template>
    <ContainerSecao id="parceiros" class="secao-parceiros">
        <div class="alinhamento-conteudo">
            <header class="parceiros-header">
                <TituloPrincipal tag="h2" :tamanho="2" variacao="escuro" class="titulo-ajustado">
                    <i class="fa-solid fa-network-wired"></i>
                    Parceiros e Integrações
                </TituloPrincipal>
                <p class="subtitulo-parceiros">
                    Conectados com os maiores players do mercado para garantir eficiência de ponta a ponta.
                </p>
            </header>

            <div class="carrossel">
                <div class="track">
                    <img v-for="n in 13" :key="'a' + n" :src="require(`@/assets/img/partners/${n}.png`)"
                        class="logo-item" alt="Parceiro TrimLog" />
                    <img v-for="n in 13" :key="'b' + n" :src="require(`@/assets/img/partners/${n}.png`)"
                        class="logo-item" aria-hidden="true" alt="" />
                </div>
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
};
</script>

<style scoped>
.secao-parceiros {
    padding-top: 20px !important;
    padding-bottom: 40px !important;
}

.alinhamento-conteudo {
    text-align: left;
    width: 100%;
}

.titulo-ajustado {
    margin: 0 !important;
    padding: 0 !important;
    display: flex;
    align-items: center;
    gap: 15px;
}

.subtitulo-parceiros {
    margin-top: 10px;
    color: var(--escuro-destaque);
    font-size: 1.1rem;
    opacity: 0.8;
}

.carrossel {
    overflow: hidden;
    margin-top: 40px;
    width: 100%;
    position: relative;
}

.track {
    display: flex;
    align-items: center;
    gap: 60px;
    width: max-content;
    animation: scroll 40s linear infinite;
    padding: 25px 0;
    /* Aumentado para o hover não cortar */
}

.logo-item {
    width: 250px;
    height: 150px;
    object-fit: contain;
    flex-shrink: 0;
    transition: all var(--dinamico);
    cursor: pointer;
    filter: grayscale(100%);
    opacity: 0.6;
}

.logo-item:hover {
    transform: scale(1.1);
    filter: grayscale(0%);
    opacity: 1;
}

.track:hover {
    animation-play-state: paused;
}

@keyframes scroll {
    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(calc(-50% - 30px));
    }
}

@media (max-width: 768px) {
    .secao-parceiros {
        padding-top: 10px !important;
        padding-bottom: 30px !important;
    }

    .subtitulo-parceiros {
        font-size: 1rem;
    }

    .logo-item {
        width: 180px;
        height: 100px;
    }

    .track {
        gap: 30px;
    }

    @keyframes scroll {
        to {
            transform: translateX(calc(-50% - 15px));
        }
    }
}
</style>