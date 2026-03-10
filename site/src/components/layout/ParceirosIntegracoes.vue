<template>
    <ContainerSecao id="parceiros" class="secao-parceiros">
        <div class="alinhamento-conteudo">
            <TituloPrincipal tag="h2" :tamanho="2" variacao="escuro" class="titulo-ajustado">
                <i class="fa-solid fa-network-wired"></i>
                Parceiros e Integrações
            </TituloPrincipal>

            <div class="carrossel">
                <div class="track">
                    <img v-for="n in 13" :key="'a' + n" :src="require(`@/assets/img/partners/${n}.png`)"
                        class="logo-item" />
                    <img v-for="n in 13" :key="'b' + n" :src="require(`@/assets/img/partners/${n}.png`)"
                        class="logo-item" aria-hidden="true" />
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
#parceiros {
    background: #ffffff;
}

.secao-parceiros {
    padding-top: 10px !important;
    padding-bottom: 30px !important;
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

.carrossel {
    overflow: hidden;
    margin-top: 30px;
    width: 100%;
    position: relative;
}

.track {
    display: flex;
    align-items: center;
    gap: 60px;
    width: max-content;
    animation: scroll 40s linear infinite;
}

.logo-item {
    width: 250px;
    height: 150px;
    object-fit: contain;
    flex-shrink: 0;
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
        padding-top: 5px !important;
        padding-bottom: 20px !important;
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