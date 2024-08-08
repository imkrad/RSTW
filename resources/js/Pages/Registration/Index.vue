<template>
    <Head title="Log in"/>
    <div class="auth-page-wrapper pt-5 d-flex justify-content-center align-items-center min-vh-100 background-container">
          <div class="overlay"></div>
        <div class="auth-page-content">
            <BContainer>

                <BRow class="justify-content-center">
                    <BCol md="10">
                        <BCard no-body class="mt-4">

                            <BCardBody class="p-4 mb-4">
                                <div class="row mb-2">
                                    <!-- <div class="col-1">
                                        <img src="@assets/images/logo-sm.png" alt="" class="avatar-sm">
                                    </div> -->
                                    <div class="col-11">
                                        <div class="text-primary mt-1">
                                            <h4 class="fs-16 fw-semibold">RSTW Training Registration</h4>
                                            <p class="mt-n2">Fill up the form carefully.</p>
                                        </div>
                                    </div>
                                </div>
                                <form class="customform">
                                    <BRow class="g-3"> 
                                       <BCol lg="12" class="mt-n2 mb-0">
                                            <hr class="text-muted"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-n1">
                                            <InputLabel for="name" value="Firstname" :message="form.errors.firstname"/>
                                            <TextInput id="name" v-model="form.firstname" type="text" class="form-control" placeholder="Please enter firstname" @input="handleInput('firstname')" :light="true"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-n1">
                                            <InputLabel for="name" value="Middlename" :message="form.errors.middlename"/>
                                            <TextInput id="name" v-model="form.middlename" type="text" class="form-control" placeholder="Please enter middlename" @input="handleInput('middlename')" :light="true"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-0">
                                            <InputLabel for="name" value="Lastname" :message="form.errors.lastname"/>
                                            <TextInput id="name" v-model="form.lastname" type="text" class="form-control" placeholder="Please enter lastname" @input="handleInput('lastname')" :light="true"/>
                                        </BCol>
                                        <BCol lg="3" class="mt-0">
                                            <InputLabel for="name" value="Age" :message="form.errors.contact_no"/>
                                            <TextInput id="name" v-model="form.age" type="text" class="form-control" placeholder="Please enter age" @input="handleInput('contact_no')" :light="true"/>
                                        </BCol>
                                        <BCol lg="3" class="mt-0">
                                            <InputLabel for="name" value="Sex" :message="form.errors.contact_no"/>
                                            <TextInput id="name" v-model="form.sex" type="text" class="form-control" placeholder="Please enter sex" @input="handleInput('contact_no')" :light="true"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-0">
                                            <InputLabel for="name" value="Email Address" :message="form.errors.email"/>
                                            <TextInput id="name" v-model="form.email" type="email" class="form-control" placeholder="Please enter email" @input="handleInput('email')" :light="true"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-0">
                                            <InputLabel for="name" value="Contact no." :message="form.errors.contact_no"/>
                                            <TextInput id="name" v-model="form.contact_no" type="text" class="form-control" placeholder="Please enter contact no." @input="handleInput('contact_no')" :light="true"/>
                                        </BCol>
                                        <BCol lg="12" class="mt-0 mb-0">
                                            <hr class="text-muted"/>
                                        </BCol>
                                        <BCol lg="4" class="mt-n2">
                                            <InputLabel for="name" value="Affiliation" :message="form.errors.contact_no"/>
                                            <TextInput id="name" v-model="form.affiliation" type="text" class="form-control" placeholder="Please enter affiliation" @input="handleInput('affiliation')" :light="true"/>
                                        </BCol>
                                        <BCol lg="4" class="mt-n2">
                                            <InputLabel for="name" value="Position/Designation" :message="form.errors.contact_no"/>
                                            <TextInput id="name" v-model="form.position" type="text" class="form-control" placeholder="Please enter position" @input="handleInput('position')" :light="true"/>
                                        </BCol>
                                        <BCol lg="4" class="mt-n2">
                                            <InputLabel for="name" value="PRC Registration Number (If Applicable)" :message="form.errors.prc_no"/>
                                            <TextInput id="name" v-model="form.prc_no" type="text" class="form-control" placeholder="Please enter prc no." @input="handleInput('prc_no')" :light="true"/>
                                        </BCol>
                                        <BCol lg="12" class="mt-0 mb-0">
                                            <hr class="text-muted"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-n1">
                                            <InputLabel for="region" value="Region" :message="form.errors.region_code"/>
                                            <Multiselect :options="regions" label="name" v-model="form.region_code" :message="form.errors.region_code" placeholder="Select Region" @input="handleInput('region_code')"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-n1">
                                            <InputLabel for="province" value="Province" :message="form.errors.province_code"/>
                                            <Multiselect :options="provinces" :searchable="true" label="name" v-model="form.province_code" placeholder="Select Province" @input="handleInput('province_code')"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-1">
                                            <InputLabel for="municipality" value="Municipality" :message="form.errors.municipality_code"/>
                                            <Multiselect :options="municipalities" :searchable="true" label="name" v-model="form.municipality_code" placeholder="Select Municipality" @input="handleInput('municipality_code')"/>
                                        </BCol>
                                        <BCol lg="6" class="mt-1">
                                            <InputLabel for="barangay" value="Barangay" :message="form.errors.barangay_code"/>
                                            <Multiselect :options="barangays" :searchable="true" label="name" v-model="form.barangay_code" placeholder="Select Barangay" @input="handleInput('barangay_code')"/>
                                        </BCol>
                                        <BCol lg="12" class="mt-1">
                                            <InputLabel for="address" value="Address" :message="form.errors.address"/>
                                            <TextInput id="address" v-model="form.address" type="text" class="form-control" placeholder="Please enter address" @input="handleInput('address')" :light="true"/>
                                        </BCol>
                                    </BRow>
                                </form>
                            </BCardBody>
                        </BCard>

                    </BCol>
                </BRow>
            </BContainer>
        </div>
        <Register :dropdowns="dropdowns" ref="register"/>
    </div>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    layout: null,
    components: {Multiselect, InputLabel, TextInput},
    props: ['regions'],
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                firstname: null,
                lastname: null,
                middlename: null,
                sex: null,
                age: null,
                contact_no: null,
                email: null,
                affiliation: null,
                position: null,
                prc_no: null,
                region_code: this.region,
                province_code: null,
                municipality_code: null,
                barangay_code: null,
                address: null,
            }),
            provinces: [],
            municipalities: [],
            barangays: [],
        }
    },
    watch: {
        'form.region_code'(){
            (this.form.region_code) ? this.fetchProvince(this.form.region_code) : '';
        },
        'form.province_code'(){
            (this.form.province_code) ? this.fetchMunicipality(this.form.province_code) : '';
        },
        'form.municipality_code'(){
            (this.form.municipality_code) ? this.fetchBarangay(this.form.municipality_code) : '';
        },
    },
    methods: {
        fetchProvince(code){
            axios.get('/lists/locations/',{
                params: {
                    option: 'list_province',
                    code: code
                }
            })
            .then(response => {
                this.provinces = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchMunicipality(code){
            axios.get('/lists/locations/',{
                params: {
                    option: 'list_municipality',
                    code: code
                }
            })
            .then(response => {
                this.municipalities = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchBarangay(code){
            axios.get('/lists/locations/',{
                params: {
                    option: 'list_barangay',
                    code: code
                }
            })
            .then(response => {
                this.barangays = response.data;
            })
            .catch(err => console.log(err));
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
    }
}
</script>
<style scoped>
.auth-page-wrapper {
    background-color: hsl(0, 0%, 88%);
}
.background-container {
  position: relative;
  width: 100%;
  height: 100vh; /* Adjust as needed */
  background-image: url('https://onelab.test/images/registration.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(83, 83, 83, 0.8); /* Adjust the color and opacity */
  z-index: 1;
}

.content {
  position: relative;
  z-index: 2;
  /* Your content styles here */
}
</style>
