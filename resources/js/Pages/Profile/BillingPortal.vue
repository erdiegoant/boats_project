<template>
    <jet-action-section>
        <template #title> Billing Portal </template>
        <template #description> Manage your billing information, payment methods and invoices in one place </template>
        <template #content>
            <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>
                    Manage all your billing information, payment methods, subscriptions and check your invoices directly
                    at Stripe, so all your information is handled with complete privacy.
                </p>
            </div>

            <div class="mt-5"><jet-button type="button" @click="navigateToBillingPortal"> Go to Billing Portal</jet-button></div>
        </template>
    </jet-action-section>
</template>

<script>
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";

export default {
    components: {
        JetActionSection,
        JetButton,
    },
    methods: {
        navigateToBillingPortal() {
            window.open(route('billing-portal'), '_blank');
        }
    }
}
</script>
