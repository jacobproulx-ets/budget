<template>
    <div class="container">
        <h1>404 | Page introuvable</h1>
        <nav>
            <button class="btn-no-style" @click="onBackClickHandler">
                Retour
            </button>
        </nav>
    </div>
</template>

<script>
import NavFooter from "../components/NavFooter.vue";
import router from "../router";

export default {
    components: {
        NavFooter
    },
    props: {
        myProp: {
            type: String,
            required: false,
            default: "Hello",
        },
    },
    data() {
        return {}
    },
    beforeCreate() {
    },
    beforeMount() {
    },
    methods: {
        onBackClickHandler() {
            router.go(-1)
        },
    },
    computed: {},
    watch: {},
}
</script>

<style lang="scss" scoped>
.container {
    display: flex;
    height: 100vh;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    h1 {
        font-size: 45px;
        font-weight: 100;
        width: 100%;
        text-align: center;
        margin-bottom: 50px;
    }

    nav {
        > * {
            font-size: 16px;
            color: white;
            font-weight: 100;
            text-decoration: underline;
            margin: 25px;
        }
    }
}
</style>
