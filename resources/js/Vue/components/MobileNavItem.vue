<template>

    <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
        <!-- Heroicon name: outline/chart-bar -->
        <slot name="svg" />
        <span class="ml-3 text-base font-medium text-gray-900">
                <slot name="title" />
              </span>
    </a>
</template>

<script>
export default {
    name: "MobileNavItem"
}
</script>

<style scoped>

</style>
