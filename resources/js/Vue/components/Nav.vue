<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white shadow-lg z-10">
        <div class="container">
            <div
                class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <Logo/>
                </div>
<!--                <div class="flex">-->
<!--                    <a href="https://www.linkedin.com/in/kegan-lester-a65746185/" target="_blank" class="mr-4"><LinkedIn /></a>-->
<!--                    <a href="https://github.com/keganlester" target="_blank"><Github /></a>-->
<!--                </div>-->
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 transition"
                            aria-expanded="false" @click="set('show', true)">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <Fade>
            <MobileNav v-if="show"/>
        </Fade>
    </div>

</template>

<script>
import Logo from "./Logo";
import Help from "../svg/Help";
import Guides from "../svg/Guides";
import Calendar from "../svg/Calendar";
import NavItem from "./NavItem";
import MobileNav from "./MobileNav";
import ButtonPrimary from "./ButtonPrimary";
import Fade from "../transitions/Fade";
import {navService} from "../services/NavService";
import {NavState} from "../states/NavState";
import FadeUp from "../transitions/FadeUp";
import ButtonPlain from "./ButtonPlain";
import LinkedIn from "../svg/LinkedIn";
import Github from "../svg/Github";

export default {
    name: "Nav",
    components: {Github, LinkedIn, ButtonPlain, FadeUp, Fade, ButtonPrimary, MobileNav, NavItem, Calendar, Guides, Help, Logo},
    setup() {
        return {...navService}
    },
    data(){
        return {showt:false}
    },
    computed: {
        show() {
            return NavState.show;
        }
    }
}
</script>

<style scoped>

</style>
