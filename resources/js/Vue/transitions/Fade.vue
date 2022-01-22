<template>
    <transition name="fade" mode="out-in" @before-enter="beforeEnter" @after-enter="enter" @before-leave="enter" @leave="beforeEnter">
        <slot></slot>
    </transition>
</template>

<script>
export default {
    name: "Fade",
    methods: {
        beforeEnter: function (el) {
            el.style.opacity = 0
            el.style.transform = "scale(.95)"
        },
        enter: function (el) {
            el.style.opacity = 100
            el.style.transform = "scale(1)"
        },
    }
}
</script>

<style scoped>
.fade-enter{
    @apply duration-200 ease-out
}

.fade-leave{
    @apply duration-100 ease-in
}

</style>
