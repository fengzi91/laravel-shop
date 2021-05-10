<template>
    <div>

        <div class="min-h-screen bg-gray-100">
            <div class="h-10 bg-black-light w-full text-xs">
                <div class="max-w-7xl mx-auto h-full px-4 sm:px-6 lg:px-8 flex justify-between text-gray-300 items-center ">
                    <div class="flex gap-x-4">
                        <a href="/" class="hover:text-white">首页</a>
                        <a href="/" class="hover:text-white">帮助</a>
                        <a href="/" class="hover:text-white">客服</a>
                    </div>
                    <div class="flex gap-x-4 items-center">
                        <a :href="route('login')" class="hover:text-white">登录</a>
                        <a :href="route('login')" class="hover:text-white">注册</a>
                        <top-cart></top-cart>
                    </div>
                </div>
            </div>
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                Laravel Shop
                            </div>
                        </div>

                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
import TopCart from "../components/TopCart";
export default {
    components: {
        TopCart
    },

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },

    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    }
}
</script>
