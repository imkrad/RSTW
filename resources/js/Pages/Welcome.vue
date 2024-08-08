<template>
    <Head title="Science and Technology Scholarship Information System" />
    <div class="layout-wrapper landing">
        <!-- <section class="section pb-0 hero-section" id="hero" style="height: 500px;">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <b-container>
                <b-row class="justify-content-center">
                    <b-col lg="8" sm="10">
                        <div class="text-center">
                            <h1 class="display-6 fw-semibold mb-1 lh-base">2024
                                <span class="text-primary">RSTW</span>
                            </h1>
                            <div class="lead lh-base">
                                <p>Siyensya, Teknolohiya at Inobasyon : </p>
                                <p class="text-muted fs-14 mt-n2">Kabalikat sa Matatag, Maginhawa, at Panatag na Kinabukasan.</p>
                                <p class="text-muted fs-14 mt-n3">Providing Solutions and Opening Opportunities in the Green Economy</p>
                            </div>

                            <div class="d-flex gap-2 justify-content-center mt-4">
                                <b-link href="/auth/signin-basic" class="btn btn-primary">REGISTER NOW </b-link>
                            </div>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
            <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                        <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                        </path>
                    </g>
                </svg>
            </div>
        </section> -->
        <section class="section job-hero-section bg-light pb-0" id="hero" style="margin-top: -100px;">
            <BContainer>
                <BRow class="justify-content-between align-items-center">
                    <BCol lg="6">
                        <div>
                            <h1 class="display-6 fw-semibold text-capitalize mb-3 lh-base"><span class="text-primary">DOST-IX</span> RSTW 2024</h1>
                            <p class="lead lh-base mb-1">Siyensya, Teknolohiya at Inobasyon :</p>
                            <p class="lead text-muted fs-14 lh-base mb-4">Kabalikat sa Matatag, Maginhawa, at Panatag na Kinabukasan. <br />Providing Solutions and Opening Opportunities in the Green Economy</p>
                            <BButton @click="openRegister()" variant="primary" class="submit-btn w-80 h-100" type="submit">
                            REGISTER NOW</BButton>

                            <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                                <li class="list-inline-item text-danger fw-semibold"><i
                                        class="mdi mdi-tag-multiple-outline align-middle"></i> Zamboanga City :</li>
                                <li class="list-inline-item">
                                    <BLink href="#">September 5-6, 2024</BLink>
                                </li>
                              
                            </ul>
                        </div>
                    </BCol>
                    <BCol lg="4">
                        <div class="position-relative home-img text-center mt-5 mt-lg-0">
                            <BCard no-body class="p-3 rounded shadow-lg inquiry-box">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                            <i class="ri-calendar-line"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-15 lh-base mb-0">Trainings for RSTW</h5>
                                </div>
                            </BCard>

                            <img src="/images/job.png" alt="" class="user-img">

                            <div class="circle-effect">
                                <div class="circle"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                                <div class="circle4"></div>
                            </div>
                        </div>
                    </BCol>
                </BRow>
            </BContainer>
        </section>
        <section id="team" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-soft bg-light border shadow-none mb-3">
                            
                                <div class="d-flex mt-1">
                                    <div class="avatar-xs align-self-center">
                                        <div class="avatar-title rounded bg-transparent"><i
                                                class="bx bx-news h4 mt-1"></i></div>
                                    </div>
                                    <div class="overflow-hidden mr-auto align-self-center">
                                        <h5 class="fw-semibold fs-12 mt-1">Trainings</h5>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <b-list-group>
                                <b-list-group-item class="fs-13" v-for="(event,index) in events" v-bind:key="index">{{event.name}} <span class="float-end">{{event.schedule}}</span></b-list-group-item>
                            </b-list-group>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <b-container>
                <b-row class="align-items-center gy-4">
                    <b-col sm>
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Be one of our Participants!</h4>
                        </div>
                    </b-col>
                    <b-col sm="auto">
                        <div>
                            <button @click="openRegister()" class="btn bg-gradient btn-danger"> Register</button>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>

        <footer class="custom-footer bg-dark py-5 position-relative">
            <b-container>
                <b-row>
                    <b-col lg="7" class="mt-4">
                        <div>
                            <div>
                                <img src="images/logo-light.png" alt="logo light" height="25">
                            </div>
                            <div class="mt-4 fs-13">
                                <p>Department of Science and Technology - IX</p>
                                <p class="ff-secondary">Siyensya, Teknolohiya at Inobasyon : Kabalikat sa Matatag, Maginhawa, at Panatag na Kinabukasan. Providing Solutions and Opening Opportunities in the Green Economy</p>
                            </div>
                        </div>
                    </b-col>

                    <b-col lg="5" class="ms-lg-auto">
                        <b-row>
                            <b-col sm="12" class="mt-4 text-end">
                                <h4 class="text-white mb-0">Contact Details</h4>
                                <div class="text-muted mt-4 fs-13">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li>
                                            Department of Science and Technology Regional Office No. IX
                                        </li>
                                        <li>
                                            Pettit Barracks, Barangay Zone IV, Zamboanga City
                                        </li>
                                        <li>
                                            Tel.: (062) 991-1024
                                        </li>
                                        <li>
                                            Fax: (062) 992-1114
                                        </li>
                                    </ul>
                                </div>
                            </b-col>
                            
                            
                        </b-row>
                    </b-col>
                </b-row>

                <b-row class="text-center text-sm-start align-items-center mt-5">
                    <b-col sm="6">

                        <div>
                            <p class="copy-rights mb-0 currentyear">{{ new Date().getFullYear() }} © DOST-IX
                            </p>
                        </div>
                    </b-col>
                    <b-col sm="6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </b-link>
                                </li>
                            </ul>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </footer>
        <b-button variant="danger" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </b-button>
    </div>
    <BModal v-model="showModal" hide-footer body-class="p-0" header-class="p-0"
        class="v-modal-custom" size="lg" content-class="border-0 overflow-hidden" centered hide-header-close>
        <div class="modal-body login-modal p-5">
            <h5 class="text-white fs-20 mb-1 mt-n3">Registration Form</h5>
            <p class="text-white-50 mb-4">Fullout the form carefully?</p>
            <div class="vstack gap-2 justify-content-center">
               <form class="customform" style="color: white;">
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
                    </BRow>
               </form>
            </div>
        </div>
        <div class="modal-body p-5">
            <form class="customform">
                <BRow class="g-3"> 
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
                <div class="mt-2 form-check">
                    <input type="checkbox" v-model="form.check" class="form-check-input" id="checkTerms">
                    <label class="form-check-label" for="checkTerms">I agree to the <span class="fw-semibold">Terms of Service</span> and Privacy Policy</label>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary btn-md" type="submit" :disabled="!form.check">
                        <div class="btn-content">Submit Now</div>
                    </button>
                </div>
            </form>
        </div>
    </BModal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default { 
    layout: null,
    components: {Multiselect, InputLabel, TextInput},
    props: ['events','regions'],
    data() {
        return {
            showModal: false,
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
                check: false
            }),
            provinces: [],
            municipalities: [],
            barangays: [],
        };
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
        openRegister(){
            this.form.check = false;
            this.showModal = true;
        },
        topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        },
    },
    mounted() {
        let backtoTop = document.getElementById("back-to-top");
        if (backtoTop) {
            backtoTop = document.getElementById("back-to-top");
            window.onscroll = function () {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backtoTop.style.display = "block";
                } else {
                    backtoTop.style.display = "none";
                }
            };
        }
        window.addEventListener('scroll', function (ev) {
            ev.preventDefault();
            var navbar = document.getElementById("navbar");
            if (navbar) {
                if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
                    navbar.classList.add("is-sticky");
                } else {
                    navbar.classList.remove("is-sticky");
                }
            }
        });
    },
};
</script>