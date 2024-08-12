<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Delete User" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <div v-if="user">
            <div class="mt-1 mb-n3">
                <div class="avatar-md mx-auto">
                    <div class="avatar-title rounded-circle bg-light">
                        <i class="h1 mb-0 bx bxs-lock text-danger"></i>
                    </div>
                </div>
                <div class="p-2 mt-2 text-center">
                    <h6 class="mb-1">"Delete participant."</h6>
                    <p class="font-size-12 text-muted"><span class="text-success fw-semibold">{{user.name}}</span> will no longer be on the list.</p>
                </div>
            </div>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                id: null,
                email: null,
                is_active: null,
                email_verified_at: '2024-05-15 08:46:33',
                type: null
            }),
            user: {},
            type: null,
            showModal: false,
        }
    },
    methods: { 
        show(data){
            this.user = data;
            this.form.id = this.user.id,
            this.showModal = true;
        },
        submit(){
            this.form.put('/utility/users/update', {
                errorBag: 'updateProfileInformation',
                preserveScroll: true,
                onSuccess: () => {
                    this.hide();
                },
            });
        },
        hide(){
            this.user = {};
            this.form.reset();
            this.form.clearErrors();
            this.showModal = false;
        }
    }
}
</script>