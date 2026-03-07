<template>
    <li class="item">
        <slot v-if="!href"></slot>
        <a class="link" v-else :href="href">
            <slot></slot>
        </a>
    </li>
</template>

<script>

export default {
    props: {
        href: String,
    }
}
</script>

<style scoped>
.link {
    text-decoration: none;
    font-weight: bold;
    font-size: 1em;
    color: var(--branco);
    transition: var(--dinamico);
}

.link:hover {
    color: var(--destaque);
}

</style>