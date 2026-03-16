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
            mensagem: "Olá! Estou navegando no site da TrimLog e gostaria de falar com um consultor agora.",
        };
    },
    computed: {
        linkWhats() {
            return `https://wa.me/${this.numero}?text=${encodeURIComponent(this.mensagem)}`;
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
    padding: 8px 15px;
    border-radius: 50px;
    margin-right: 12px;
    font-size: 14px;
    font-weight: 600;
    color: #333;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    opacity: 0;
    transform: translateX(10px);
    transition: all 0.3s ease;
    pointer-events: none;
    white-space: nowrap;
}

.btn-whatsapp {
    background: #25D366;
    color: white;
    font-size: 32px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
    animation: pulse 2s infinite;
    transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.whatsapp-container:hover .whatsapp-text {
    opacity: 1;
    transform: translateX(0);
}

.btn-whatsapp:hover {
    transform: scale(1.1) rotate(10deg);
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

@media (max-width: 768px) {
    .whatsapp-text {
        display: none;
    }

    .whatsapp-container {
        bottom: 20px;
        right: 20px;
    }
}
</style>