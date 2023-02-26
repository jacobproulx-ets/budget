<template>
    Hello Template!
</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
    components: {},
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
    methods: {},
    computed: {},
    watch: {},
})
</script>

<style lang="scss">
</style>
