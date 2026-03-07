<template>
    <section class="territorio" id="territorio">
        <div class="container">
            <div class="territorio-grid">
                <div class="territorio-content animate-up">
                    <span class="tag">Expansão Estratégica</span>
                    <h2>Domine sua <strong>Região</strong></h2>
                    <p>Trabalhamos com um modelo de exclusividade real. Cada nó logístico possui um mercado protegido e
                        otimizado para escala.</p>

                    <div class="territorio-features">
                        <div class="t-item">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <div>
                                <h4>Zonas Logísticas</h4>
                                <p>Atuação baseada em zonas pré-definidas para garantir raio de entrega eficiente.</p>
                            </div>
                        </div>
                        <div class="t-item">
                            <i class="fa-solid fa-draw-polygon"></i>
                            <div>
                                <h4>Abrangência Flexível</h4>
                                <p>Municípios inteiros ou agrupamentos vizinhos conforme o potencial B2B regional.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="territorio-banner animate-fade delay-1">
                    <div class="banner-inner">
                        <i class="fa-solid fa-handshake-angle"></i>
                        <p>A definição exata do território é estratégica e definida durante a sua negociação.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.territorio {
    background-color: var(--branco);
    padding: 100px 0;
}

.territorio-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 60px;
    align-items: center;
}

.tag {
    color: var(--destaque);
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 2px;
}

h2 {
    color: var(--escuro);
    font-size: clamp(2rem, 4vw, 3rem);
    margin: 15px 0;
}

h2 strong {
    color: var(--destaque);
}

.territorio-features {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.t-item {
    display: flex;
    gap: 20px;
}

.t-item i {
    color: var(--destaque);
    font-size: 1.8rem;
    margin-top: 5px;
}

.t-item h4 {
    color: var(--escuro);
    font-size: 1.2rem;
    margin-bottom: 5px;
    font-weight: 700;
}

.t-item p {
    font-size: 0.95rem;
    color: var(--escuro-destaque);
    margin: 0;
}

.territorio-banner {
    background-color: var(--escuro);
    padding: 50px;
    border-radius: 20px;
    border-right: 8px solid var(--destaque);
}

.banner-inner {
    text-align: center;
}

.banner-inner i {
    color: var(--destaque);
    font-size: 3rem;
    margin-bottom: 20px;
}

.banner-inner p {
    color: var(--branco);
    font-size: 1.1rem;
    line-height: 1.6;
    font-weight: 500;
    margin: 0;
}

@keyframes upIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.animate-up {
    animation: upIn 0.8s ease backwards;
}

.animate-fade {
    animation: fadeIn 1s ease backwards;
}

.delay-1 {
    animation-delay: 0.4s;
}

@media (max-width: 992px) {
    .territorio-grid {
        grid-template-columns: 1fr;
    }
}
</style>