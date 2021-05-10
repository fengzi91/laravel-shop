<template>
    <div
        class="cursor-pointer relative h-10 px-4 py-3 hover:bg-white bg-gray-light hover:text-orange-500 z-20"
        @mouseenter="show"
        @mouseleave="hide"
    >
        <span>购物车 (0)</span>
        <div class="absolute top-full right-0 p-12 shadow-focus h-24 bg-white z-10" v-if="shown">
            123123123123123
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            shown: false
        }
    },
    methods: {
        show() {
            this.shown = true
        },
        hide() {
            this.shown = true
        }
    }
}
</script>
