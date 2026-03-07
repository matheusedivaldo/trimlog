<template>
    <a href="#formulario" class="float-cta animate-pop">
        <i class="fa-solid fa-file-signature"></i>
        <span>QUERO SER FRANQUEADO</span>
    </a>
</template>

<style scoped>
.float-cta {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 999;
    background-color: var(--destaque);
    color: var(--branco);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 25px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.9rem;
    box-shadow: 0 10px 25px rgba(215, 72, 2, 0.4);
    transition: all var(--dinamico);
}

.float-cta i {
    font-size: 1.2rem;
}

.float-cta:hover {
    background-color: var(--destaque-claro);
    transform: scale(1.05) translateY(-5px);
}

@keyframes popIn {
    from {
        opacity: 0;
        transform: scale(0.5) translateY(50px);
    }

    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.animate-pop {
    animation: popIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) backwards;
    animation-delay: 1.5s;
}

@media (max-width: 768px) {
    .float-cta {
        bottom: 20px;
        right: 20px;
        padding: 12px 20px;
    }

    .float-cta span {
        display: none;
        /* Em mobile, deixa apenas o ícone para não tapar o conteúdo */
    }

    .float-cta {
        border-radius: 50%;
        width: 60px;
        height: 60px;
        justify-content: center;
        padding: 0;
    }

    .float-cta i {
        font-size: 1.5rem;
    }
}
</style>