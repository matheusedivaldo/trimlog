<template>
    <section class="contato" id="formulario">
        <div class="container">
            <div class="contato-grid">
                <div class="contato-info animate-up">
                    <span class="tag">Contato</span>
                    <h2>Inicie sua jornada na <strong>TrimLog</strong></h2>
                    <p>Preencha o formulário para receber o material completo e agendar uma reunião estratégica.</p>

                    <div class="info-links">
                        <a href="mailto:contato@trimlog.com.br" class="info-item">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            contato@trimlog.com.br
                        </a>
                        <a href="tel:11912969307" class="info-item">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            (11) 91296-9307
                        </a>
                        <a href="https://trimlog.com.br" target="_blank" class="info-item">
                            <span class="icon"><i class="fa-solid fa-globe"></i></span>
                            www.trimlog.com.br
                        </a>
                    </div>
                </div>

                <div class="form-wrapper animate-fade delay-1">
                    <form @submit.prevent="handleSubmit" class="form-leads">
                        <div class="form-group">
                            <label>Nome Completo</label>
                            <input type="text" v-model="form.nome" placeholder="Seu nome" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>WhatsApp</label>
                                <input type="tel" v-model="form.whatsapp" placeholder="(00) 00000-0000" required>
                            </div>
                            <div class="form-group">
                                <label>E-mail Corporativo</label>
                                <input type="email" v-model="form.email" placeholder="seu@email.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Cidade de Interesse</label>
                                <input type="text" v-model="form.cidade" placeholder="Ex: Sorocaba/SP" required>
                            </div>
                            <div class="form-group">
                                <label>Capital Disponível</label>
                                <select v-model="form.capital" required>
                                    <option value="" disabled>Selecione um valor</option>
                                    <option value="100-150k">R$ 100k a R$ 150k</option>
                                    <option value="150-200k">R$ 150k a R$ 200k</option>
                                    <option value="above-200k">Acima de R$ 200k</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit">ENVIAR INTERESSE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import http from '../../config/http';
import Swal from 'sweetalert2';

const form = ref({
    nome: '',
    whatsapp: '',
    email: '',
    cidade: '',
    capital: '',
    assunto: 'Novo Lead de Franquia'
});

const handleSubmit = async () => {
    Swal.fire({ title: 'Enviando...', didOpen: () => Swal.showLoading() });

    try {
        const corpoMensagem = `
            Lead vindo da Landing Page:
            WhatsApp: ${form.value.whatsapp}
            Cidade: ${form.value.cidade}
            Capital: ${form.value.capital}
        `;

        const response = await http.post('/contato/enviar-email', {
            nome: form.value.nome,
            email: form.value.email,
            assunto: form.value.assunto,
            mensagem: corpoMensagem,
            origem: 'Landing Page Franquia'
        });

        if (response.data.sucesso) {
            Swal.fire("Sucesso!", "Seu interesse foi registrado. Entraremos em contato em breve!", "success");
            form.value = { nome: '', whatsapp: '', email: '', cidade: '', capital: '', assunto: 'Novo Lead de Franquia' };
        } else {
            Swal.fire("Ops!", response.data.mensagem, "error");
        }
    } catch (error) {
        Swal.fire("Erro", "Não foi possível enviar seus dados. Tente novamente mais tarde.", "error");
    }
}
</script>
<style scoped>
.contato {
    background-color: var(--branco);
    padding: 100px 0;
}

.contato-grid {
    display: grid;
    grid-template-columns: 0.8fr 1.2fr;
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
    font-size: clamp(2rem, 4vw, 2.5rem);
    line-height: 1.2;
    margin: 15px 0;
}

h2 strong {
    color: var(--destaque);
}

.contato-info p {
    color: var(--escuro-destaque);
    font-size: 1.1rem;
    margin-bottom: 40px;
}

.info-links {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 15px;
    color: var(--escuro);
    text-decoration: none;
    font-weight: 500;
    transition: color var(--dinamico);
}

.info-item i {
    color: var(--destaque);
    font-size: 1.2rem;
}

.info-item:hover {
    color: var(--destaque);
}

.form-wrapper {
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.form-leads {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--escuro);
}

input,
select {
    padding: 12px 15px;
    border: 1px solid var(--secundario);
    border-radius: 4px;
    font-family: inherit;
    font-size: 1rem;
    outline: none;
    width: 100%;
}

input:focus,
select:focus {
    border-color: var(--destaque);
}

.btn-submit {
    background-color: var(--destaque);
    color: var(--branco);
    border: none;
    padding: 18px;
    border-radius: 4px;
    font-weight: 700;
    font-size: 1rem;
    cursor: pointer;
    transition: all var(--dinamico);
    margin-top: 10px;
}

.btn-submit:hover {
    background-color: var(--destaque-claro);
    transform: translateY(-2px);
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
    animation-delay: 0.3s;
}

@media (max-width: 992px) {
    .contato {
        padding: 60px 0;
    }

    .contato-grid {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }

    .info-links {
        align-items: center;
        margin-bottom: 20px;
    }

    .form-wrapper {
        padding: 25px;
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 1.8rem;
    }

    .form-wrapper {
        padding: 20px;
    }
}
</style>