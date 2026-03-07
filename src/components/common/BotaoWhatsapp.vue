<template>
    <div class="whatsapp-container">

        <span class="whatsapp-text">
            Fale conosco
        </span>

        <a :href="linkWhats" class="btn-whatsapp" target="_blank" title="Fale conosco no WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

    </div>
</template>

<script>
export default {
    name: "BotaoWhatsapp",

    data() {
        return {
            numero: "5511912969307",
            mensagem:
                "Olá! Gostaria de mais informações sobre os serviços da TrimLog.",
        };
    },

    computed: {
        linkWhats() {
            return `https://wa.me/${this.numero}?text=${encodeURIComponent(
                this.mensagem
            )}`;
        },
    },
};
</script>

<style scoped>
.whatsapp-container {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: flex;
    align-items: center;
    z-index: 999;
}

.whatsapp-text {
    background: white;
    padding: 8px 12px;
    border-radius: 6px;
    margin-right: 10px;
    font-size: 14px;
    color: #333;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transform: translateX(10px);
    transition: 0.3s;
}

.btn-whatsapp {
    background: #25D366;
    color: white;
    font-size: 30px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    animation: pulse 2s infinite;
    transition: 0.3s;
}

.whatsapp-container:hover .whatsapp-text {
    opacity: 1;
    transform: translateX(0);
}

.btn-whatsapp:hover {
    transform: scale(1.1);
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }

    70% {
        box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
    }

    100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }
}
</style>