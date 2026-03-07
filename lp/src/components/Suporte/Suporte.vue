<template>
    <section class="suporte" id="suporte">
        <div class="container">
            <header class="suporte-header animate-fade-down">
                <span class="tag">Parceria de Verdade</span>
                <h2>Suporte em cada <strong>Etapa</strong></h2>
            </header>

            <div class="suporte-path">
                <div class="path-step animate-up">
                    <div class="step-num">1</div>
                    <div class="step-content">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h3>Treinamento</h3>
                        <p>Capacitação completa para o franqueado e equipe, abrangendo processos e cultura TrimLog.</p>
                    </div>
                </div>

                <div class="path-step animate-up delay-1">
                    <div class="step-num">2</div>
                    <div class="step-content">
                        <i class="fa-solid fa-box-open"></i>
                        <h3>Implantação</h3>
                        <p>Suporte técnico na montagem da base logística para atingir o padrão de qualidade total.</p>
                    </div>
                </div>

                <div class="path-step animate-up delay-2">
                    <div class="step-num">3</div>
                    <div class="step-content">
                        <i class="fa-solid fa-chart-pie"></i>
                        <h3>Acompanhamento</h3>
                        <p>Monitoramento contínuo através de KPIs e consultoria de campo para otimizar seus resultados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.suporte {
    background-color: var(--escuro);
    padding: 100px 0;
}

.suporte-header {
    text-align: center;
    margin-bottom: 80px;
}

.tag {
    color: var(--destaque-claro);
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 2px;
}

h2 {
    color: var(--branco);
    font-size: clamp(2rem, 4vw, 3rem);
    margin-top: 15px;
}

h2 strong {
    color: var(--destaque);
}

.suporte-path {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    position: relative;
}

.path-step {
    background: var(--escuro-destaque);
    padding: 40px;
    border-radius: 12px;
    position: relative;
    transition: transform var(--dinamico);
}

.path-step:hover {
    transform: translateY(-10px);
}

.step-num {
    position: absolute;
    top: -20px;
    right: 20px;
    background: var(--destaque);
    color: var(--branco);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.2rem;
}

.step-content i {
    color: var(--destaque-claro);
    font-size: 2.5rem;
    margin-bottom: 25px;
}

.step-content h3 {
    color: var(--branco);
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.step-content p {
    color: var(--secundario);
    line-height: 1.6;
    font-size: 0.95rem;
    margin: 0;
}

@keyframes fadeDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
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

.animate-fade-down {
    animation: fadeDown 0.6s ease backwards;
}

.animate-up {
    animation: upIn 0.8s ease backwards;
}

.delay-1 {
    animation-delay: 0.2s;
}

.delay-2 {
    animation-delay: 0.4s;
}

@media (max-width: 992px) {
    .suporte-path {
        grid-template-columns: 1fr;
        gap: 50px;
    }
}
</style>