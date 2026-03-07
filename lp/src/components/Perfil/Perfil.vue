<template>
    <section class="perfil" id="perfil">
        <div class="container">
            <div class="perfil-wrapper">
                <header class="perfil-header animate-fade-down">
                    <span class="tag">Perfil Desejado</span>
                    <h2>Quem buscamos para ser um <strong>Franqueado</strong>?</h2>
                    <p>A TrimLog cresce através de parcerias com quem tem foco em execução e liderança regional.</p>
                </header>

                <div class="perfil-cards">
                    <div class="card-perfil animate-up">
                        <div class="card-icon">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                        <h3>Empreendedor Ativo</h3>
                        <p>Buscamos parceiros que queiram estar à frente do negócio, liderando a operação e o
                            crescimento regional.</p>
                    </div>

                    <div class="card-perfil animate-up delay-1">
                        <div class="card-icon">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <h3>Gestor Operacional</h3>
                        <p>Perfil focado em processos, eficiência logística e excelência no atendimento ao cliente B2B.
                        </p>
                    </div>
                </div>

                <div class="alerta-passivo animate-fade delay-2">
                    <div class="alerta-icon">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="alerta-texto">
                        <strong>Atenção:</strong> Este modelo de negócio <strong>NÃO</strong> é indicado para
                        investidores puramente passivos. A atuação direta é fundamental para o sucesso da unidade.
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.perfil {
    background-color: var(--branco);
    padding: 100px 0;
}

.perfil-wrapper {
    max-width: 1000px;
    margin: 0 auto;
}

.perfil-header {
    text-align: center;
    margin-bottom: 60px;
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

.perfil-header p {
    color: var(--escuro-destaque);
    font-size: 1.1rem;
}

.perfil-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.card-perfil {
    background: var(--secundario);
    padding: 40px;
    border-radius: 8px;
    text-align: center;
    transition: transform var(--dinamico);
}

.card-perfil:hover {
    transform: translateY(-10px);
}

.card-icon {
    color: var(--destaque);
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.card-perfil h3 {
    color: var(--escuro);
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.card-perfil p {
    color: var(--escuro-destaque);
    line-height: 1.6;
}

.alerta-passivo {
    display: flex;
    align-items: center;
    gap: 25px;
    background-color: #fff1f1;
    border: 1px solid #ffcccc;
    padding: 30px;
    border-radius: 8px;
}

.alerta-icon {
    color: #ff4444;
    font-size: 2rem;
    flex-shrink: 0;
}

.alerta-texto {
    color: #882222;
    font-size: 1.1rem;
    line-height: 1.5;
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

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.animate-fade-down {
    animation: fadeDown 0.6s ease backwards;
}

.animate-up {
    animation: upIn 0.8s ease backwards;
}

.animate-fade {
    animation: fadeIn 1s ease backwards;
}

.delay-1 {
    animation-delay: 0.2s;
}

.delay-2 {
    animation-delay: 0.4s;
}

@media (max-width: 768px) {
    .alerta-passivo {
        flex-direction: column;
        text-align: center;
    }
}
</style>