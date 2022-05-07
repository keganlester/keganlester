<template>
    <div>
        <Nav/>
        <TestApp/>
        <!--        <ContentBlock/>-->
        <HomeGrid/>
        <!--        <HeaderSection/>-->
    </div>
</template>

<script>
import Nav from "./components/Nav";
import ContentBlock from "./components/ContentBlock";
import HeaderSection from "./components/HeaderSection";
import HomeGrid from "./components/HomeGrid";
import TestApp from "./components/TestApp";

export default {
    name: "App",
    components: {TestApp, HomeGrid, HeaderSection, ContentBlock, Nav}
}
</script>

<style scoped>

</style>
