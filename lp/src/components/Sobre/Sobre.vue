<template>
    <section class="sobre" id="sobre">
        <div class="container">
            <header class="sobre-header animate-fade-down">
                <span class="tag">Conceito</span>
                <h2>O que é a <strong>TrimLog</strong>?</h2>
                <p>Somos uma solução completa de transporte corporativo focada em transformar a logística regional.</p>
            </header>

            <div class="sobre-grid">
                <div class="sobre-card animate-up">
                    <div class="icon">01</div>
                    <h3>Logística B2B</h3>
                    <p>Especialista em transporte corporativo com foco em eficiência e redução de custos operacionais.
                    </p>
                </div>

                <div class="sobre-card animate-up delay-1">
                    <div class="icon">02</div>
                    <h3>Operação Local</h3>
                    <p>Gestão descentralizada com inteligência central, permitindo agilidade em cada nó logístico.</p>
                </div>

                <div class="sobre-card animate-up delay-2">
                    <div class="icon">03</div>
                    <h3>Tecnologia</h3>
                    <p>Sistemas próprios de rastreamento e gestão que garantem transparência total ao cliente.</p>
                </div>
            </div>

            <div class="sobre-quote animate-fade delay-3">
                <blockquote>"Conectando regiões, otimizando resultados."</blockquote>
            </div>
        </div>
    </section>
</template>

<script setup>
</script>

<style scoped>
.sobre {
    background-color: var(--branco);
    padding: 100px 0;
}

.sobre-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 60px;
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

.sobre-header p {
    color: var(--escuro-destaque);
    font-size: 1.1rem;
}

.sobre-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.sobre-card {
    background: var(--secundario);
    padding: 40px;
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.sobre-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.icon {
    color: var(--destaque);
    font-size: 1.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    opacity: 0.5;
}

h3 {
    color: var(--escuro);
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.sobre-card p {
    color: var(--escuro-destaque);
    line-height: 1.6;
}

.sobre-quote {
    margin-top: 80px;
    text-align: center;
}

blockquote {
    font-size: clamp(1.5rem, 3vw, 2rem);
    font-weight: 600;
    color: var(--destaque);
    font-style: italic;
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

.delay-3 {
    animation-delay: 0.6s;
}

@media (max-width: 768px) {
    .sobre {
        padding: 60px 0;
    }
}
</style>