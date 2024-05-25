<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
</script>

<template>
    <Head title="Checkout" />

    <AuthenticatedLayout>
        <div class="p-4 mt-2 max-w-[1250px] mx-auto text-3xl font-extrabold">
            Checkout
        </div>

        <div class="flex max-w-[1250px] mx-auto pt-4">
            <div class="w-8/12">
                <div
                    class="flex items-stretch border-b border-b-gray-300 w-[calc(100%-100px)] pb-4 pl-4 mb-6"
                >
                    <div class="text-gray-900 font-extrabold text-xl mr-12">
                        Shipping Address
                    </div>
                    <div class="px-4 font-semibold">
                        <div>
                            {{ $page.props.auth.user.first_name }}
                            {{ $page.props.auth.user.last_name }}
                        </div>
                        <div>{{ $page.props.auth.address.addr1 }}</div>
                        <div>{{ $page.props.auth.address.addr2 }}</div>
                        <div>{{ $page.props.auth.address.city }}</div>
                        <div>{{ $page.props.auth.address.postcode }}</div>
                        <div>{{ $page.props.auth.address.country }}</div>
                    </div>
                </div>
            </div>

            <div class="w-4/12 border border-gray-400 rounded-md py-4 px-2">
                <form id="payment-form">
                    <div
                        class="flex justify-between text-xl text-red-700 font-extrabold border-y border-y-gray-300 my-3 p-2"
                    >
                        <div>Order total:</div>
                        <div>USD: 0000</div>
                    </div>

                    <button
                        id="submit"
                        class="w-full bg-yellow-400 hover:bg-yellow-500 rounded-md text-sm font-extrabold p-2"
                    >
                        <div id="button-text">Place your order in USD</div>
                    </button>

                    <p
                        id="card-error"
                        role="alert"
                        class="text-red-700 text-center font-semibold"
                    ></p>
                </form>
            </div>
        </div>
        <div class="w-[1200px] mx-auto text-xl font-bold pb-2 underline">
            Items
        </div>
        <div class="w-[1200px] mx-auto">
            <div class="flex items-center py-1">PROD DETAILS HERE</div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
#card-element {
    border-radius: 4px 4px 0 0;
    padding: 12px;
    border: 1px solid rgba(50, 50, 93, 0.1);
    height: 44px;
    width: 100%;
    background: white;
}

#payment-request-button {
    margin-bottom: 32px;
}
</style>
