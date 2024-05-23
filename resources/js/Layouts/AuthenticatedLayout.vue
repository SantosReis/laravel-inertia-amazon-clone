<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="min-w-[1150px] bg-gray-100 h-full">
        <div
            class="flex items-center bg-gray-900 h-[60px] py-2 fixed z-50 min-w-[1150px] w-full"
        >
            <div class="flex">
                <Link
                    :href="route('dashboard')"
                    class="text-white h-[50px] p-2 pt-3 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer"
                >
                    <img width="100" src="/images/logo/AMAZON_LOGO.png" />
                </Link>
            </div>
        </div>
    </div>
</template>
