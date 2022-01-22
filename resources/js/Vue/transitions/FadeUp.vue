<template>
    <transition name="fade-up" mode="out-in" @before-enter="beforeEnter" @after-enter="enter" @before-leave="enter" @leave="beforeEnter">
        <slot></slot>
    </transition>
</template>

<script>
export default {
    name: "FadeUp",
    methods: {
        beforeEnter: function (el) {
            el.style.opacity = 0
            el.style.transform = "translateY(0.25rem)"
        },
        enter: function (el) {
            el.style.opacity = 100
            el.style.transform = "translateY(0px)"
        },
    }
}
</script>

<style scoped>
.fade-up-enter{
    @apply ease-out duration-200
}

.fade-up-leave{
    @apply ease-in duration-150
}

</style>
