<template>
    <section class="financeiro">
        <div class="container">
            <header class="financeiro-header">
                <span class="tag">Rentabilidade</span>
                <h2>Modelo <strong>Financeiro</strong></h2>
                <p>Um investimento estruturado para retorno rápido e focado no sucesso do parceiro.</p>
            </header>

            <div class="financeiro-grid">
                <div class="financeiro-card">
                    <span class="label">Investimento Estimado</span>
                    <span class="value">R$ 121 MIL</span>
                    <p class="obs">*Valores podem variar conforme a região e instalações.</p>
                </div>

                <div class="financeiro-card destaque-card">
                    <span class="label">Payback Estimado</span>
                    <span class="value">~16 Meses</span>
                    <p class="obs">Baseado nos resultados reais da unidade piloto.</p>
                </div>

                <div class="financeiro-card">
                    <span class="label">Taxas Fixas</span>
                    <span class="value">ZERO</span>
                    <p class="obs">Modelo de Royalties Reversos: sem taxas mensais abusivas.</p>
                </div>
            </div>

            <div class="financeiro-footer">
                <p>O sucesso da franqueadora está 100% atrelado à produção do franqueado.</p>
            </div>
        </div>
    </section>
</template>

<script setup>
</script>

<style scoped>
.financeiro {
    background-color: var(--escuro);
    padding: 100px 0;
}

.financeiro-header {
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

.financeiro-header p {
    color: var(--secundario);
    margin-top: 15px;
}

.financeiro-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.financeiro-card {
    background: var(--escuro-destaque);
    padding: 40px;
    border-radius: 8px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: transform var(--dinamico);
}

.financeiro-card:hover {
    transform: scale(1.02);
}

.destaque-card {
    border: 1px solid var(--destaque);
    position: relative;
}

.label {
    color: var(--destaque-pastel);
    text-transform: uppercase;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.value {
    color: var(--branco);
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 15px;
}

.obs {
    color: var(--secundario);
    font-size: 0.85rem;
    line-height: 1.4;
    opacity: 0.7;
}

.financeiro-footer {
    margin-top: 60px;
    text-align: center;
    padding: 30px;
    background: var(--preto-50);
    border-radius: 8px;
}

.financeiro-footer p {
    color: var(--branco);
    font-size: 1.1rem;
    font-weight: 500;
}

@media (max-width: 768px) {
    .financeiro {
        padding: 60px 0;
    }
}
</style>