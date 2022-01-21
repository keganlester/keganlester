<template>
    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
        <slot name="svg"/>
        <div class="ml-4">
            <p class="text-base font-medium text-gray-900">
                <slot name="title"/>
            </p>
            <p class="mt-1 text-sm text-gray-500">
                <slot name="sub-title"/>
            </p>
        </div>
    </a>
</template>

<script>
export default {
    name: "DropdownSubItem"
}
</script>

<style scoped>

</style>
