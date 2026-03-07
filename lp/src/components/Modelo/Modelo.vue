<template>
    <section class="modelo">
        <div class="container">
            <header class="modelo-header">
                <span class="tag">Operação</span>
                <h2>Divisão de <strong>Responsabilidades</strong></h2>
                <p>Um modelo de parceria onde cada lado foca no que faz de melhor para garantir a eficiência do nó
                    logístico.</p>
            </header>

            <div class="modelo-grid">
                <div class="modelo-col">
                    <div class="card-title">
                        <h3>Franqueado</h3>
                    </div>
                    <ul class="lista-modelo">
                        <li>Operação local e gestão do Nó Logístico Regional.</li>
                        <li>Gestão de frota e equipe operacional.</li>
                        <li>Execução de cross-docking e entregas.</li>
                    </ul>
                </div>

                <div class="modelo-col destaque-col">
                    <div class="card-title">
                        <h3>Franqueadora</h3>
                    </div>
                    <ul class="lista-modelo">
                        <li>Tecnologia e sistemas de gestão integrados.</li>
                        <li>Prospecção de contratos nacionais e grandes contas.</li>
                        <li>Suporte estratégico e inteligência logística.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
</script>

<style scoped>
.modelo {
    background-color: var(--escuro);
    padding: 100px 0;
}

.modelo-header {
    text-align: center;
    margin-bottom: 60px;
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

.modelo-header p {
    color: var(--secundario);
    max-width: 600px;
    margin: 20px auto 0;
}

.modelo-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

.modelo-col {
    background: var(--escuro-destaque);
    padding: 50px;
    border-radius: 8px;
    border-bottom: 4px solid transparent;
}

.destaque-col {
    border-bottom-color: var(--destaque);
}

.card-title h3 {
    color: var(--branco);
    font-size: 1.8rem;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid var(--escuro-50);
}

.lista-modelo {
    list-style: none;
}

.lista-modelo li {
    color: var(--secundario);
    margin-bottom: 20px;
    position: relative;
    padding-left: 25px;
    line-height: 1.5;
}

.lista-modelo li::before {
    content: "→";
    position: absolute;
    left: 0;
    color: var(--destaque);
    font-weight: bold;
}

@media (max-width: 768px) {
    .modelo-grid {
        grid-template-columns: 1fr;
    }

    .modelo-col {
        padding: 30px;
    }
}
</style>