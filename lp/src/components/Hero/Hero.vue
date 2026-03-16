<template>
    <section class="hero">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="../../assets/img/logos/logo-texto-claro.svg" alt="TrimLog">
                </div>
                <div class="contact-top">
                    <a :href="linkWhatsapp" target="_blank" class="whatsapp-link">
                        <i class="fa-brands fa-whatsapp"></i>
                        (11) 91296-9307
                    </a>
                </div>
            </nav>

            <div class="hero-grid">
                <div class="hero-content">
                    <span class="tag">Oportunidade de Negócio</span>
                    <h1>Sua Franquia de <strong>Logística B2B</strong></h1>
                    <p>
                        Seja um Nó Logístico Regional da <strong>TrimLog</strong> e fature com contratos
                        nacionais através de um modelo validado e tecnológico.
                    </p>

                    <div class="hero-cta">
                        <a :href="linkWhatsapp" target="_blank" class="btn-primary btn-pulse">
                            <i class="fa-brands fa-whatsapp"></i>
                            QUERO SER FRANQUEADO
                        </a>
                        <span class="cta-note">*Modelo validado em unidade piloto</span>
                    </div>
                </div>

                <div class="hero-features">
                    <div class="feature-card animate-up">
                        <span class="value">R$ 121k</span>
                        <span class="label">Faturamento Médio (1 ano)</span>
                    </div>
                    <div class="feature-card animate-up delay-1">
                        <span class="value">18% a 25%</span>
                        <span class="label">Lucratividade Média</span>
                    </div>
                    <div class="feature-card animate-up delay-2">
                        <span class="value">R$ 100k</span>
                        <span class="label">Investimento Estimado</span>
                    </div>
                    <div class="feature-card animate-up delay-3">
                        <span class="value">16 Meses</span>
                        <span class="label">Payback Estimado</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const telefone = "5511912969307";
const mensagem = "Olá! Vim pela landing page da TrimLog e gostaria de receber mais informações sobre como me tornar um franqueado.";
const linkWhatsapp = `https://wa.me/${telefone}?text=${encodeURIComponent(mensagem)}`;
</script>

<style scoped>
.hero {
    position: relative;
    min-height: 90vh;
    display: flex;
    flex-direction: column;
    background-image: linear-gradient(to right, rgba(21, 31, 32, 0.95), rgba(21, 31, 32, 0.7)),
        url('../../assets/img/banners/1.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    overflow: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    width: 100%;
    position: relative;
    z-index: 2;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 0;
}

.logo img {
    height: 55px;
    width: auto;
}

.whatsapp-link {
    color: var(--branco);
    text-decoration: none;
    font-weight: 500;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color var(--dinamico);
}

.whatsapp-link i {
    color: #25d366;
    font-size: 1.3rem;
}

.whatsapp-link:hover {
    color: var(--destaque-claro);
}

.hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 60px;
    align-items: center;
    padding: 40px 0 80px;
}

.tag {
    color: var(--destaque-claro);
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 2px;
}

h1 {
    color: var(--branco);
    font-size: clamp(2.5rem, 5vw, 4rem);
    line-height: 1.1;
    margin: 20px 0;
}

h1 strong {
    color: var(--destaque);
}

p {
    color: var(--secundario);
    font-size: 1.25rem;
    line-height: 1.6;
    margin-bottom: 40px;
    max-width: 550px;
}

.hero-cta {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.btn-primary {
    background-color: var(--destaque);
    color: var(--branco);
    padding: 22px 45px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    gap: 12px;
    width: fit-content;
    transition: all var(--dinamico);
    box-shadow: 0 4px 15px rgba(215, 72, 2, 0.3);
}

.btn-primary i {
    font-size: 1.4rem;
}

.btn-pulse {
    animation: pulse-orange 2s infinite;
}

@keyframes pulse-orange {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(215, 72, 2, 0.7);
    }

    70% {
        transform: scale(1.03);
        box-shadow: 0 0 0 15px rgba(215, 72, 2, 0);
    }

    100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(215, 72, 2, 0);
    }
}

.btn-primary:hover {
    background-color: var(--destaque-claro);
    transform: translateY(-3px);
}

.cta-note {
    color: var(--branco);
    font-size: 0.85rem;
    font-style: italic;
    opacity: 0.6;
}

.hero-features {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.feature-card {
    background: rgba(53, 64, 65, 0.8);
    backdrop-filter: blur(10px);
    padding: 20px 30px;
    border-left: 5px solid var(--destaque);
    border-radius: 0 8px 8px 0;
    transition: transform 0.4s ease;
}

.feature-card:hover {
    transform: translateX(10px);
}

.feature-card .value {
    display: block;
    color: var(--branco);
    font-size: 1.8rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 5px;
}

.feature-card .label {
    color: var(--destaque-pastel);
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 1px;
}

.animate-up {
    animation: fadeInUp 0.8s ease backwards;
}

.delay-1 {
    animation-delay: 0.2s;
}

.delay-2 {
    animation-delay: 0.4s;
}

.delay-3 {
    animation-delay: 0.6s;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 992px) {
    .hero {
        background-attachment: scroll;
    }

    .hero-grid {
        grid-template-columns: 1fr;
        text-align: center;
        padding: 20px 0 60px;
    }

    .btn-primary {
        margin: 0 auto;
        width: 100%;
        justify-content: center;
    }

    .hero-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-top: 40px;
    }

    .feature-card {
        padding: 20px 15px;
        text-align: left;
    }

    .feature-card .value {
        font-size: 1.5rem;
    }

    p {
        margin: 20px auto 40px;
    }

    .whatsapp-link {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .hero-features {
        grid-template-columns: 1fr;
    }

    .logo img {
        height: 45px;
    }

    h1 {
        font-size: 2.2rem;
    }

    p {
        font-size: 1.1rem;
    }
}
</style>