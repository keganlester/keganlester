<template>
    <div class="relative">
        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
        <button type="button"
                class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                @click="set('activeItem', item.id)"
                aria-expanded="false">
            <span><slot name="title"/></span>
            <Down v-if="active"/>
        </button>
        <FadeUp>
            <div
                class="absolute z-10 -ml-4 mt-3 transition-all px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" v-if="activeItem">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        <DropdownSubItem>
                            <template v-slot:svg/>
                            <template v-slot:title/>
                            <template v-slot:sub-title/>
                        </DropdownSubItem>
                    </div>
                    <DropdownFooter>
                        <div class="flow-root">
                            <a href="#"
                               class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/play -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="ml-3">Watch Demo</span>
                            </a>
                        </div>

                        <div class="flow-root">
                            <a href="#"
                               class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span class="ml-3">Contact Sales</span>
                            </a>
                        </div>
                    </DropdownFooter>
                </div>
            </div>
        </FadeUp>
    </div>
</template>

<script>
import Analytics from "../svg/Analytics";
import Engagement from "../svg/Engagement";
import Security from "../svg/Security";
import Integrations from "../svg/Integrations";
import Automations from "../svg/Automations";
import Down from "../svg/Down";
import DropdownFooter from "./DropdownFooter";
import DropdownSubItem from "./DropdownSubItem";
import FadeUp from "../transitions/FadeUp";
import {NavState} from "../states/NavState";
import {navService} from "../services/NavService";

export default {
    name: "DropdownItem",
    components: {
        FadeUp,
        DropdownSubItem, DropdownFooter, Down, Automations, Integrations, Security, Engagement, Analytics
    },
    props:['item'],
    setup(){
        return {...navService}
    },
    computed:{
        activeItem(){
            return NavState.activeItem === this.item.id;
        }
    }
}
</script>

<style scoped>

</style>
